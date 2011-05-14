<!--
<ul id="product-images">
	foreach($product['ProductImage'] as $image){
		echo '<li>' . $this->Html->image($image['path']) . '</li>';
	}
</ul>

<ul id="slideshow-captions">
	foreach($product['ProductImage'] as $image){
		echo '<li>' . $image['caption'] . '</li>';
	}
</ul>
-->


 <ul id="slideshow-images">
   		<li><?php echo $this->Html->image('slideshow/product1.jpg', array('width'=> '100%'));?></li>
   		<li><?php echo $this->Html->image('slideshow/product2.jpg', array('width'=> '100%'));?></li>
   		<li><?php echo $this->Html->image('slideshow/product3.jpg', array('width'=> '100%'));?></li>
   	</ul>
    <ul id="slideshow-captions" class="grid_11 alpha omega">
   		<li>Caption 1: This could be some flavor text about how beautiful the WorldBeanRoasthers coffee is!</li>
   		<li>Caption 2: This could be a little blurb about how you participate in valuable programs such as FairTrade :)</li>
   		<li>Caption 3: We always offer many varieties and exotic choices for your coffee - check out all of the options <a href="">here</a>!</li>
   	</ul>