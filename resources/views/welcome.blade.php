
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>發一崇德台南道場</title>
<meta name="keywords" content="發一崇德台南道場,發一崇德,台南道場,台南" />
<meta name="description" content="發一崇德台南道場，響應您我善願同步誦經祈願，恭誦彌勒救苦真經，心經
誦經後點擊「我已經完成誦經」迴向，把愛串起來 凝聚您我慈悲之心，叩求諸天仙佛慈悲挽化疫情止息 願天下眾生平安" />

<meta property="og:title" content="發一崇德台南道場,發一崇德,台南道場,台南" /> 
<meta property="og:description" content="發一崇德台南道場，響應您我善願同步誦經祈願，恭誦彌勒救苦真經，心經
誦經後點擊「我已經完成誦經」迴向，把愛串起來 凝聚您我慈悲之心，叩求諸天仙佛慈悲挽化疫情止息 願天下眾生平安" />
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url();
	background-color:#FCE6D8;
}
</style>
<link href="kh2020.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
</script>
</head>

<body>
<div width="100%" >  
<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="70%" align="center" valign="middle" class="T5" style="font-size:10vw;"><font face="標楷體";>發一崇德台南學界-愛的共振</font></td>
    </tr>
    <tr>
      <td colspan="2" align="center" valign="middle"><img src="{{ URL::to('/') }}/image/command.jpg"  width="561" /></td>
    </tr>
    <tr>
      <td height="200vw" colspan="2" align="center" valign="middle"><span style="font-size:5vw;">
      《響應您我善願同步祈願》<br />
      相信上天、相信愿力、相信愿力抵業力<br />
事事感恩遇考懺悔、希望人人都能脫劫關<br /><br />

#善願同步迴向祈願#<br />
下面三類其一完成後點擊「我已經完成」迴向<br />
把愛串起來 凝聚您我慈悲之心<br />

    </tr>
    <tr>
      <td height="100" colspan="2" align="center" valign="middle"><table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="30%" align="center"><font size="3em" color="#1A5E85" style="word-wrap:break-word">彌勒救苦真經<br>1萬5千部迴向</font></td>
        <td width="30%" align="center"><font size="3em" color="#853F1A" style="word-wrap:break-word">誠心叩首祈願祝禱<br>300萬叩頭迴向</font></td>
        <td width="30%" align="center"><font size="3em" color="#44851A" style="word-wrap:break-word">蔬醒行動人人響應<br>1日1齋疫情消災</font></td>
        </tr>  
      <tr>
      <form action="{{url('/')}}" method="post">
      @csrf
          <td width="30%" align="center"><input name="chanting" type="submit" class="btn btn-primary" value="我已經完成誦經1部/次"/></td>
          <td width="30%" align="center"><input name="kowtow" type="submit" class="btn btn-danger"   value="我已經完成叩首1000下/次"/></td>
          <td width="30%" align="center"><input name="veg" type="submit" class="T4 btn btn-success" value="我已經響應吃素1餐/次" /></td>
</form>
        </tr>
   <tr>
      <td width="30%" height="30"  align="center" valign="middle">誦經累計次數：<span >{{ $chanting }}</span>次</td>
      <td width="30%" height="30"  align="center" valign="middle" >叩首累計次數：<span >{{ $kowtow}}</span>次</td>
      <td width="30%" height="30"  align="center" valign="middle" >一日一齋累計次數：<span >{{ $veg }}</span>次</td>
    </tr>
    
    <tr>
      <td colspan="2"  height="60" align="center" valign="middle" class="T2">&nbsp;</td>
    </tr>
  
  </table>
</div>
</body>
</html>
