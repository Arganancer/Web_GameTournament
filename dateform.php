<?php
	$currentyear = date('Y');
	$currentmonth = date('m');
	$currentday = date('d');

	$months = array(
	"Janvier",
	"Février",
	"Mars",
	"Avril",
	"Mai",
	"Juin",
	"Juillet",
	"Août",
	"Septembre",
	"Octobre",
	"Novembre",
	"Décembre");

	/* YEAR */
	echo '<td class="name">Year:
	<select class="value" name="year">';
		for($i = 2015; $i <= 2019; $i++)
		{
			if($i == $currentyear)
			{
				echo '<option value="' . $i . '" selected="selected">' . $i . '</option>';
			}
			else
			{
				echo '<option value="' . $i . '">' . $i . '</option>';
			}
		}
	echo '</select></td>';
	
	/* MONTH */
	echo '<td class="name">Month:
	<select class="value" name="month">';
		for($i = 1; $i <= 12; $i++)
		{
			if($i == $currentmonth)
			{
				echo '<option value="' . $i . '" selected="selected">' . $months[$i - 1] . '</option>';
			}
			else
			{
				echo '<option value="' . $i . '">' . $months[$i - 1] . '</option>';
			}
		}
	echo '</select></td>';
	
	/* DAY */
	echo '<td class="name">Day:
	<select class="value" name="day">';
	for($i = 1; $i <= 31; $i++)
	{
		if($i == $currentday)
		{
			echo ' <option value="' . $i . '" selected="selected">' . $i . '</option>';
		}
		else
		{
			echo ' <option value="' . $i . '">' . $i . '</option>';
		}
	}
	echo '</select></td>';				
?>