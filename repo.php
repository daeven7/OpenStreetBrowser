<?php include "conf.php"; /* load a local configuration */ ?>
<?php session_start(); ?>
<?php require 'vendor/autoload.php'; /* composer includes */ ?>
<?php include "modulekit/loader.php"; /* loads all php-includes */ ?>
<?php include "node_modules/json-multiline-strings/src/json-multiline-strings.php"; ?>
<?php call_hooks("init"); /* initialize submodules */ ?>
<?php
$allRepositories = getRepositories();

if (!isset($_REQUEST['repo'])) {
  Header("Content-Type: application/json; charset=utf-8");
  print '{';

  $c = 0;
  foreach ($allRepositories as $repoId => $repoData) {
    $repo = getRepo($repoId, $repoData);

    print $c++ ? ',' : '';
    print json_encode($repoId, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES) . ':';
    $info = $repo->info();

    if (isset($repoData['repositoryUrl'])) {
      $info['repositoryUrl'] = $repoData['repositoryUrl'];
    }
    if (isset($repoData['categoryUrl'])) {
      $info['categoryUrl'] = $repoData['categoryUrl'];
    }

    print json_encode($info, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES|JSON_FORCE_OBJECT);
  }

  print '}';
  exit(0);
}

$repoId = $_REQUEST['repo'];
if (!array_key_exists($repoId, $allRepositories)) {
  Header("HTTP/1.1 404 Repository not found");
  exit(0);
}

$repoData = $allRepositories[$repoId];
$repo = getRepo($repoId, $repoData);

$cacheDir = null;
$ts = $repo->timestamp($path);
if (isset($config['cache'])) {
  $cacheDir = "{$config['cache']}/repo";
  @mkdir($cacheDir);
  $cacheTs = filemtime("{$cacheDir}/{$repoId}.json");
  if ($cacheTs === $ts) {
    Header("Content-Type: application/json; charset=utf-8");
    readfile("{$cacheDir}/{$repoId}.json");
    exit(0);
  }
}

$data = $repo->data();

if (isset($repoData['repositoryUrl'])) {
  $data['repositoryUrl'] = $repoData['repositoryUrl'];
}
if (isset($repoData['categoryUrl'])) {
  $data['categoryUrl'] = $repoData['categoryUrl'];
}

$ret = json_encode($data, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);

Header("Content-Type: application/json; charset=utf-8");
print $ret;

file_put_contents("{$cacheDir}/{$repoId}.json", $ret);
touch("{$cacheDir}/{$repoId}.json", $ts);
