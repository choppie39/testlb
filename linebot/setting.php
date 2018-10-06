<?php
class Setting {
	public function getChannelAccessToken(){
		$channelAccessToken = "MrRAoQIDpQFx87LP8Q/JwoFkSNVPPbIiPtvc0RjRD+gsN6mRQ1iU3NOOVrD/NdimnVI5SkZsNTMJLu9P6CRJ1X1nM3OLsozFEEnrrChqt84yNEVR0PCMnDtHhiKvZ2wdZ/7MCE8q4uUVMOUH+EzRmwdB04t89/1O/w1cDnyilFU=
";
		return $channelAccessToken;
	}
	public function getChannelSecret(){
		$channelSecret = "
4f79023673b6c903fafe817e303d7824
";
		return $channelSecret;
	}
	public function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}