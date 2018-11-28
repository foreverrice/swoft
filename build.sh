#!/bin/sh

version=$1

if [ -z "$version" ]; then
    echo '请输入版本号' 
    exit
fi

echo "构建镜像 $version 开始"

echo "step1: 构建本地镜像"
docker build -t 19931106/swoft:$version --build-arg CACHEBUST=$(date +%s) .
echo "step2: 关联到远程仓库"
docker tag 19931106/swoft:$version 19931106/swoft:$version

echo "step3: 推送到远程仓库"
docker push https://hub.docker.com/r/19931106/swoft:$version
echo "镜像构建完成，可以拉取新的镜像使用了"
