<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP OPERATORS</title>
<style>
	td{
		font-size:20px;
		font-family:Tahoma, Geneva, sans-serif;
	}
</style>
</head>

<body>
<table width="100%" border="1" cellpadding="10">
  <tr>
    <td colspan="3" align="center" bgcolor="#6699CC"><h1>PHP OPERATORS (ΤΕΛΕΣΤΕΣ)</h1></td>
  </tr>
  <tr>
    <td bgcolor="#99CCFF"><strong>operator</strong></td>
    <td bgcolor="#99CCFF"><strong>example</strong></td>
    <td bgcolor="#99CCFF"><strong>output</strong></td>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#FFFFEE">ΑΡΙΘΜΗΤΙΚΟΙ ΤΕΛΕΣΤΕΣ</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE">+ </td>
    <td>print 5+4</td>
    <td><?php print 5+4 ?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE">-</td>
    <td>print 5-4</td>
    <td><?php print 5-4 ?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE">*</td>
    <td>print 5*2</td>
    <td><?php print 5*2 ?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE">/</td>
    <td>print 5/5</td>
    <td><?php print 5/5 ?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE">% </td>
    <td>print 5%2</td>
    <td><?php print 5%4 ?></td>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#FFFFEE">ΤΕΛΕΣΤHΣ ΣΥΝΕΝΩΣΗΣ ΑΛΦΑΡΙΘΜΗΤΙΚΩΝ</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE">.</td>
    <td bgcolor="#FFFFEE">print "Hello"." "."World"</td>
    <td bgcolor="#FFFFEE"><?php print "Hello"." "."World" ?></td>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#FFFFEE">ΤΕΛΕΣΤHΣ ΕΚΧΩΡΗΣΗΣ ΤΙΜΗΣ</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE">=</td>
    <td bgcolor="#FFFFEE">$x=5; print $x;</td>
    <td bgcolor="#FFFFEE"><?php $x=5; print "x="; print $x; ?></td>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#FFFFEE">ΣΥΝΘΕΤΟΙ ΤΕΛΕΣΤΕΣ ΕΚΧΩΡΗΣΗΣ ΤΙΜΗΣ</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE">+=</td>
    <td>print $x+=4 (x=x+4)</td>
    <td><?php print "x=".$x+=4; ?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE">-=</td>
    <td>print $x-=5 (x=x-5)</td>
    <td><?php print "x=".$x-=5; ?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE">*=</td>
    <td>print $x*=2 (x=x*2)</td>
    <td><?php print "x=".$x*=2; ?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE">/=</td>
    <td>print $x/=4 (x=x/4)</td>
    <td><?php print "x=".$x/=4; ?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE">%=</td>
    <td>print $x%=2 (x=x%2)</td>
    <td><?php print "x=".$x%=2; ?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE">.=</td>
    <td>$y="Hello"; print $y.=" world!";</td>
    <td><?php $y="Hello"; print $y.=" world!" ?></td>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#FFFFEE">ΤΕΛΕΣΤΕΣ ΑΥΤΟΜΑΤΗΣ ΑΥΞΗΣΗΣ / ΜΕΙΩΣΗΣ</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE">++</td>
    <td>$x=5; print $x++</td>
    <td><?php $x=5; print "x=".$x++;?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE">&nbsp;</td>
    <td>print ++$x</td>
    <td><?php print "x=".++$x; ?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE">--</td>
    <td>$x=5; print $x--</td>
    <td><?php $x=5; print "x=".$x--; ?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE">&nbsp;</td>
    <td>print --$x</td>
    <td><?php print "x=".--$x; ?></td>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#FFFFEE">ΤΕΛΕΣΤΕΣ ΣΥΓΚΡΙΣΗΣ (TRUE=1, FALSE=0)</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE">==</td>
    <td>$x=5; print $x==5; // print $x=='5'; // print 0==false;</td>
    <td><?php $x=5; print $x==5;?>
        // 
       <?php print $x=='5'; ?>
       // 
       <?php print 0==false;?>
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE">!=</td>
    <td>print $x!=5; // print $x!=6;</td>
    <td><?php print (int) ($x!=5);?>
        //
        <?php print $x!=6?>
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE">===</td>
    <td>print $x===5; // print $x==='5';// print 0 === false;</td>
    <td><?php print $x===5;?>
        //
        <?php print (int)($x==='5');?>
        //
        <?php print (int) (0 === false);?>
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE">&gt;</td>
    <td>print $x&gt;5;</td>
    <td><?php print (int)($x>5);?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE">&gt;=</td>
    <td>print $x&gt;=5;</td>
    <td><?php print $x>=5;?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE">&lt;</td>
    <td>print $x&lt;5;</td>
    <td><?php print (int)($x<5);?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE">&lt;=</td>
    <td>print $x&lt;=5;</td>
    <td><?php print $x<=5;?></td>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#FFFFEE">ΛΟΓΙΚΟΙ ΤΕΛΕΣΤΕΣ</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE">|| ή or</td>
    <td>print ($x==5 || $x!=5)</td>
    <td><?php print ($x==5 || $x!=5); ?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE">&& ή and</td>
    <td>print ($x==5 && $x&lt;=5)</td>
    <td><?php print ($x==5 && $x<=5); ?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE">!</td>
    <td>$x=0; print !$x</td>
    <td><?php $x=0; print !$x;?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE">^ (Xor)</td>
    <td>print $x^0</td>
    <td><?php print (int)($x^0);?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE"> <=> (Spaceship) </td>
    <td>print 2 <=> 3 // print 2 <=> 2 // print 3 <=> 2 </td>
    <td><?php print 2 <=> 3;?>
        // 
        <?php print 2 <=> 2;?> 
       // 
       <?php print 3 <=> 2; ?>
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEE">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</body>
</html>