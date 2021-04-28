<?php
function draw_axises($im_width,$im_heignt)
{
global $im,$black,$l_grey,$x0,$y0,$maxX,$maxY;
$x0=25.0; //������ ��� ��������� �� X
$y0=20.0; //������ ��� ��������� �� Y
$maxX=$im_width-$x0; //������������ �������� ���
//��������� �� X � ��������
$maxY=$im_heignt-$y0; //������������ �������� ���
//��������� �� Y � ��������
//������ ��� X
imageline($im, $x0, $maxY, $maxX, $maxY, $black);
//������ ��� Y
imageline($im, $x0, $y0, $x0, $maxY, $black);
//������ ������� �� ��� X
$xArrow[0]=$maxX-6; $xArrow[1]=$maxY-2;
$xArrow[2]=$maxX; $xArrow[3]=$maxY;
$xArrow[4]=$maxX-6; $xArrow[5]=$maxY+2;
imagefilledpolygon($im, $xArrow, 3, $black);
//������ ������� �� ��� Y
$yArrow[0]=$x0-2; $yArrow[1]=$y0+6;
$yArrow[2]=$x0; $yArrow[3]=$y0;
$yArrow[4]=$x0+2; $yArrow[5]=$y0+6;
imagefilledpolygon($im, $yArrow, 3, $black);
}

function draw_grid($xStep,$yStep,$xCoef,$yCoef)
{global $im,$black,$l_grey,$x0,$y0,$maxX,$maxY;
$xSteps=($maxX-$x0)/$xStep-1; //���������� ����������
//����� �� ��� X
$ySteps=($maxY-$y0)/$yStep-1; //���������� ����������
//����� �� ��� Y
//������� ����� �� ��� X
for($i=1;$i<$xSteps+1;$i++){
   imageline($im, $x0+$xStep*$i, $y0, $x0+$xStep*$i,$maxY-1, $l_grey);
   //��� ������������� ������� �������� ����� ����� �� ��� X
   imagestring($im, 1, ($x0+$xStep*$i)-1, $maxY+2, $i*$xCoef, $black);
}
//������� ����� �� ��� Y
for($i=1;$i<$ySteps+1;$i++){
   imageline($im, $x0+1, $maxY-$yStep*$i, $maxX,
   $maxY-$yStep*$i, $l_grey);
   //��� ������������� ������� �������� ����� ����� �� ��� Y
   imagestring($im, 1, 0, ($maxY-$yStep*$i)-3, $i*$yCoef, $black);
   }
}

function draw_data($data_x,$data_y,$points_count,$color)
{global $im,$x0,$y0,$maxY,$scaleX,$scaleY;
for($i=1;$i<$points_count;$i++){
   //������ �������� ������ �� ������ �� �������� ������
   imageline($im, $x0+$data_x[$i-1]*$scaleX, $maxY-$data_y[$i-1]*$scaleY,
          $x0+$data_x[$i]*$scaleX, $maxY-$data_y[$i]*$scaleY,$color);
   }
}
//������� ������� ������� 500 � ������� 400 ��������
$im = @ImageCreate(500, 400);
$white = ImageColorAllocate ($im, 255, 255, 255);
$black = ImageColorAllocate ($im, 0, 0, 0);
$red = ImageColorAllocate ($im, 255, 0, 0);
$green = ImageColorAllocate ($im, 0, 255, 0);
$blue = ImageColorAllocate ($im, 0, 0, 255);
$yellow = ImageColorAllocate ($im, 255, 255, 0);
$magenta = ImageColorAllocate ($im, 255, 0, 255);
$cyan = ImageColorAllocate ($im, 0, 255, 255);
$l_grey = ImageColorAllocate ($im, 221, 221, 221);
//������ ��� ���������
draw_axises(500,400);
//������ ������� ������ ��������
$x1[0]=2; $y1[0]=1;
$x1[1]=3; $y1[1]=4;
$x1[2]=3; $y1[2]=8;
$x1[3]=4; $y1[3]=16;
$x2[0]=1.5; $y2[0]=1;
$x2[1]=2.5; $y2[1]=4;
$x2[2]=3.5; $y2[2]=8;
$x2[3]=4.5; $y2[3]=16;
//���������� ������ �� �������� ������
//��� ���������� ��������
$x=array_merge($x1,$x2);
$y=array_merge($y1,$y2);
//�������� ������������ ��������
//��������� ��� ������� �������
$maxXVal=max($x);
$maxYVal=max($y);
//��������� ������� �������������� ������
//� ���������� ������� �������
$scaleX=($maxX-$x0)/$maxXVal;
$scaleY=($maxY-$y0)/$maxYVal;
//������ ��� ��� ������������ ����� � ��������
$xStep=30;
$yStep=30;
//������ ������������ �����
draw_grid($xStep,$yStep,
    round($xStep/$scaleX,1),
    round($yStep/$scaleY,1),
    true);
//������ ������ ������
draw_data($x1,$y1,4,$red);
//������ ������ ������
draw_data($x2,$y2,4,$blue);
//������� �������
Header("Content-Type: image/png");
ImagePNG($im);
//����������� ���������� �������� ������
imagedestroy($im);

?>
