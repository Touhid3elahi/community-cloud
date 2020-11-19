<!DOCTYPE html>
<html>
<title><?php echo e($event->title); ?></title>
<head>
<style>
table {page-break-before:auto;}
.datatable td {
  border: 1px solid #dddddd;
  font: 12px 'Arial';
}

.datatable th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

table {
  border-collapse: collapse;

}
.logo {
   display: flex;
   align-items:center;
   justify-content: center; 

}
th {

}

td {
  padding: 1px;
}

</style>
</head>
<body>


    <h1 align="center" style="" >
	<img src="<?php echo e(asset('assets/img/logo-pdf.jpg')); ?>" style="vertical-align: text-top;" height="40" width="40"> <?php echo e($front->title); ?></h1>

<h3 align="center">Registered Members</h3>

<table class="" style="  font: 13px 'Arial';" align="">
 <tr style="display:none;">
	<th width="10%">&nbsp;</th>
	<th width="10%">&nbsp;</th>
	<th width="10%">&nbsp;</th>
	<th width="10%">&nbsp;</th>
	<th width="60%">&nbsp;</th>
	
  </tr>
  <tr>
    <td  width="280" colspan="4"><b>Event :</b> <?php echo e($event->title); ?></td>
	<td>&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;</td>
	<td>&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td><b>Total members :</b> <?php echo e(count($members)); ?></td>
  </tr>
  <tr>
    <td colspan="4"><b>Event type :</b> <?php echo e($event->type); ?></td>
	<td>&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;</td>
	<td>&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td><b>Event date :</b> <?php echo e(\Carbon\Carbon::parse($event->date, 'UTC')->format('d-m-y')); ?></td>
  </tr>
 
</table>

<br></br>

<table class="datatable" style="width:100%">
  <tr>
    <th align="center">Name</th>
	<th align="center">Email</th>
	<th align="center">Phone</th>
	<th align="center">University</th>
	<th align="center">Department</th>
	<th align="center">Semester</th>
	</tr>

  <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
<td align="center"><?php echo e($member->name); ?></td>
<td align="center"><?php echo e($member->email); ?></td>
<td align="center"><?php echo e($member->phone); ?></td>
<td align="center"><?php echo e($member->institute); ?></td>
<td align="center"><?php echo e($member->department); ?></td>
<td align="center"><?php echo e($member->semester); ?></td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
</table>



</body>
</html>