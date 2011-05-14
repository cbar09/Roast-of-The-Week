<?php echo $this->Html->css('orders/orders.css'); ?>

<?php echo $this->Html->css('orders/add');?>

<div class="orders form">
	
	
	
<?php echo $this->Form->create('Order');?>
	<fieldset>
		<legend><?php __('Checkout'); ?></legend>
		<div id="order-info">
			<?php echo $this->Html->image('surfers-bends.gif', array('height' => '100px'));?>
			<h2><?php echo "Surfers Bends";//$orders['product']['name'];?></h2>
			<?php 
				echo $this->Form->input('quantity', array(
					'div' => 'quantity',
					'label' => false, 
					'value' => 1,
				));
				
				echo $this->Form->input('grind_type_id', array(
					'label' => false,
					'empty' => 'Select Grind Type'
				));
			?>
		</div>
		<fieldset id="shipping-info">
			<legend><?php __('Shipping Information'); ?></legend>
			<?php
				echo $this->Form->input('Customer.first_name');
				echo $this->Form->input('Customer.last_name');
				echo $this->Form->input('Customer.address_1', array('label' => 'Address Line 1'));
				echo $this->Form->input('Customer.address_2', array('label' => 'Address Line 2'));
				echo $this->Form->input('Customer.city', array('disabled' => true));
				echo $this->Form->input('Customer.state', array('disabled' => true));
				//	'type' => 'select',
				//	'options' => array(0 => 'AL', 'AK' => '1')
				//));
				echo $this->Form->input('Customer.zipcode');
				echo $this->Form->input('grind_type_id', array('type' => 'hidden'));
			?>
		</fieldset>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>