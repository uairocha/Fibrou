<?php
defined('DIR') or die('Diretório restrito');
if($this->conteudo['cabecalho1']==true){
?>
<div class="cabecalho">
<div id="cabecalho1">
<?php $this->cabecalho1(); ?></div>
<?php }if($this->conteudo['cabecalho2']==true){?>
<div id="cabecalho2"><?php $this->cabecalho2(); ?></div>
<?php }?>
</div>
<div class="centro">
	<div class="row"  style="margin-left: 0px; margin-right:0px;">
		<?php if($this->conteudo['esquerda']==true){?>
		<div class="col-lg-2" id="esquerda"><?php $this->esquerda(); ?></div>
		<?php } ?>
		<div class="col-lg-<?php $this->span_centro() ?>">
			<?php if($this->conteudo['breadcrumbs']==true){?>
			<div id="breadcrumb"><?php $this->breadcrumb(); ?></div>
			<?php } if($this->conteudo['centro1']==true){ ?>
			<div id="centro1"><?php $this->centro1(); ?></div>
			<?php } ?>
			<div id="centro2"><?php $this->centro2(); ?></div>
			<?php if($this->conteudo['centro3']==true){ ?>
			<div id="centro3"><?php $this->centro3(); ?></div>
			<?php } ?>
		</div>
		<?php if($this->conteudo['direita']==true){?>
		<div class="col-lg-2" id="direita"><?php $this->direita(); ?></div>
		<?php } ?>
	</div>
</div>
<div class="centro2"></div>
<?php if($this->conteudo['rodape1']==true){?>
<div class="rodape">
<div id="rodape1"><?php $this->rodape1(); ?></div>
<?php }if($this->conteudo['rodape2']==true){?>
<div id="rodape2"><?php $this->rodape2(); ?></div>
<?php } ?>
</div>
<div id="imprimir_rel" style="position:fixed; z-index: 9999; width: 780px; top: 10px; left: 284.5px; display: none;"></div>
<!--
<a style="position: fixed;bottom: 0px;right: 0px;z-index: 1000;width:200px;height:104px;" href="javascript:void(window.open('http://www.ixcsoft.com.br/live/chat.php','','width=590,height=610,left=0,top=0,resizable=yes,menubar=no,location=no,status=yes,scrollbars=yes'))"><img src="http://www.ixcsoft.com.br/live/image.php?id=02&amp;type=inlay" width="200" height="104" border="0" alt="Chat"></a>
<div id="livezilla_tracking" style="display:none"></div>
<script type="text/javascript">var script = document.createElement("script");script.type="text/javascript";var src = "http://www.ixcsoft.com.br/live/server.php?request=track&output=jcrpt&nse="+Math.random();setTimeout("script.src=src;document.getElementById('livezilla_tracking').appendChild(script)",1);</script>
-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44740521-1', 'ixcsoft.com.br');
  ga('send', 'pageview');

</script>
<script type="text/javascript">
ixc_stats={
	referencia:function(){
		var i = "";
		try {
			i = window.top.document.referrer
		}
		catch (Q) {
			if (window.parent) {
				try {
					i = window.parent.document.referrer
				} catch (P) {
					i = ""
				}
			}
		}
		if (i === "") {
			i = document.referrer
		}
		return escape(i)
	},
	titulo: function(){
		return document.title;
	},
	url: function(){
		var st_urlDoc = document.location.href;
		var st_pos = st_urlDoc.indexOf("//");
		if (st_pos > 0) {
			st_urlDoc = st_urlDoc.substr(st_pos);
		}
		return escape(st_urlDoc);
	},
	envia:function(){
		var src1 = 'stats.php';
		src1 += '?ref='+ixc_stats.referencia();
		src1 += '&res='+screen.width+'x'+screen.height;
		src1 += '&col='+screen.colorDepth;
		src1 += '&titulo='+ixc_stats.titulo();
		src1 +='&url='+ ixc_stats.url()
		var bn = new Image(1, 1);
		bn.src = src1;
	},
	update:function(){
		var src1 = 'stats.php?update=S&r='+Math.random();
		var bn = new Image(1, 1);
		bn.src = src1;
	}
}
ixc_stats.envia();
var r = window.setInterval('ixc_stats.update()', 30000);
</script>