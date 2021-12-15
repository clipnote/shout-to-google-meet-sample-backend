# Overview
[shout-to-google-meet-sample](https://github.com/clipnote/shout-to-google-meet-sample)で使用するAPIです。

# 使い方
1. ソースコードをクローンする

```
git clone git@github.com:clipnote/shout-to-google-meet-sample-backend.git
```

2. 下記の内容で```secret.yaml```を作成する

```
env_variables:
  APP_ID: "【Pusherのapp_id】"
  APP_KEY: "【Pusherのkey】"
  APP_SECRET: "【Pusherのsecret】"
  APP_CLUSTER: "【Pusherのcluster】"
```

3. Google App Engineにデプロイする
