<?php

namespace Common\Tool;

class EMail {

	public function send($receiver, $subject, $body) {

		// 初始化PHPMailer
		$mail = new \Common\Tool\PHPMailer\PHPMailer();

		$mail->CharSet = 'UTF-8';
		$mail->Encoding = "base64";

		// Set PHPMailer to use the sendmail transport
		if (!$mail->isSendmail()) {;
		}

		//Set who the message is to be sent from

		if (!$mail->setFrom('service@mainusoft.com', '脉云服务中心')) {
			E('设置发件人失败');
		}

		//Set an alternative reply-to address
		if (!$mail->addReplyTo('service@mainusoft.com', '脉云服务中心')) {
			E('设置回复收件人失败');
		}

		//Set who the message is to be sent to
		if (!$mail->addAddress($receiver, '用户')) {
			E('设置收件人失败');
		}

		//Set the subject line
		$mail->Subject = '脉云服务中心-注册确认信';

		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		$html = $mail->msgHTML($body);
		if (!isset($html)) {
			E('无法获得邮件内容');
		}

		//Replace the plain text body with one created manually
		// $mail->AltBody = 'This is a plain-text message body';

		//Attach an image file
		//$mail->addAttachment('images/phpmailer_mini.png');

		if ($mail->send()) {
			return true;
		} else {
			return false;
		}
	}

	public function smtp($receiver, $subject, $body) {

		// 初始化PHPMailer
		$mail = new \Common\Tool\PHPMailer\PHPMailer();

		$mail->isSMTP();// 启用SMTP
		$mail->Host = "smtp.exmail.qq.com";//SMTP服务器 以163邮箱为例子
		$mail->Port = 25;//邮件发送端口
		$mail->SMTPAuth = true;//启用SMTP认证

		$mail->CharSet = "UTF-8";//字符集
		$mail->Encoding = "base64";//编码方式

		$mail->Username = "service@mainusoft.com";//你的邮箱
		$mail->Password = "8d6DJvHLQH";//你的密码
		$mail->Subject = $subject;//邮件标题

		$mail->From = "service@mainusoft.com";//发件人地址（也就是你的邮箱）
		$mail->FromName = "脉云服务中心";//发件人姓名

		$address = $receiver;//收件人email
		$mail->AddAddress($receiver, "亲");//添加收件人（地址，昵称）

		//$mail->AddAttachment('xx.xls', '我的附件.xls');// 添加附件,并指定名称
		$mail->IsHTML(true);//支持html格式内容
		//$mail->AddEmbeddedImage("logo.jpg", "my-attach", "logo.jpg");//设置邮件中的图片
		$mail->Body = $body;//邮件主体内容

		//发送
		if ($mail->Send()) {
			return true;
		} else {
			return false;
		}
	}
}