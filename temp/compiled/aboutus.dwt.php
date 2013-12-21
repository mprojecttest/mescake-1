<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="mes,每实,蛋糕" />
<meta name="Description" content="MES每实是一个食物,生活方式,艺术和文化的综合体,它钟情于创造任何让生活产生乐趣,品质和格调的食物产品,3大系列,38款产品,让你尽享美好." />

<title>MES每实-尽享美好</title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.min.js')); ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'header_spec.js')); ?>
	<style type="text/css">
		.aboutus p,h3{font-size:13px;color:#4A0605;line-height:25px;text-align:justify; text-justify:inter-ideograph;}
		h2{color:#4A0605;}
	</style>
</head>
<body>
    
     <?php echo $this->fetch('library/page_header.lbi'); ?>
	 <?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
	 <div style="height:60px;"></div>
	 <?php if ($this->_var['step'] == 'aboutus'): ?>
	<div class='aboutus' style='width:954px;border:0 solid;background:#FEF9D9;'> <br/>
	<div style="width:850px;margin:auto;border:0px solid;">
		   <center><h2>北京艾平弗雷食品有限公司简介</h2></center><br/>

					<center><h3>MES（每实），尽享美好</h3></center><br/>
		<p>MES（每实）是北京艾平弗雷食品有限公司注册品牌。</p><br/>
		<p>MES提供的是食物、生活方式、艺术和文化的综合体。</p><br/>
		<p>MES品牌将以蛋糕、冰淇淋和巧克力产品三大门类为中心，构建四个独立子产品品牌体系。MES的每一种产品都凝聚了工艺、技术、生产、设计、 市场等多个环节的全心协作。</p><br/>
		<p>MES专注于青年生活态度和生活精神，钟情于任何让生活产生乐趣、品质和格调的食物产品研发、设计和创新。以时尚和艺术的生活标准，创造让用户渴望的产品。</p><br/>
		<p>MES希望引领食品文化。展现创新研究成果、艺术和设计的平台，以及关于食物艺术的展览、交流、品鉴和多种形态的MES文化成果。因此，MES不仅会有卓越的工厂、生产线、实验室，也会有食物研究院、艺术中心和食品博物馆。</P><br/>
		<p>MES以用户为中心，从消费者生活原型分析入手，基于人的生活进程、标准和态度，以味道和感觉设计为基础，我们创造满足人们期望，并超出人们期望的产品。我们不仅希望创造优质的产品，我们更希望改变人们对于食物的态度，从使用美食，到感受食物的美好；从与人分享，到尽享生活真谛。</P><br/>
		<p>作为一家从事高端食品研发、生产、销售、配送的B2C电子商务企业，北京艾平弗雷食品有限公司致力于在自主品牌框架下，建立基于服务系统、市场系统、研发系统和制造系统而形成的协作创新机制，采用网络销售与实体店展示相结合、中央工厂订单生产、冷链物流配送体系的电子商务营销模式，努力提供高品质的产品和快捷高效服务。为消费者提供更安全、更健康、更优质的产品及服务是我们的宗旨，“成为品质领先的创新型食品电子商务行业标杆企业”是我们的发展目标！</P><br/>
		<center><h3>我们努力成为：食品工程师、食品艺术家、梦想者！</h3></center>
		</div>
		<br/>
	</div>
	<?php elseif ($this->_var['step'] == 'companyadr'): ?>
		<div style="width:954px;margin:auto;text-align:center;border:1px solid #D0E112;">
			<img src='themes/default/images/companyadr.jpg'/>
		</div>
	
	<?php endif; ?>
	<br/>
   <?php echo $this->fetch('library/page_footer.lbi'); ?>
   
   
</body>
</html>