<!-- This Script is from www.htmlfreecodes.com, Provided by: Mahmood Bina -->
<script type='text/javascript' src='http://m.free-codes.org/gh.php?id=2001'></script>
<CENTER>

<FORM name="Keypad" action="">
<TABLE>
<B>
<TABLE border=2 width=50 height=60 cellpadding=1 cellspacing=5>
<TR>
<TD colspan=3 align=middle>
<input name="ReadOut" type="Text" size=24 value="0" width=100%>
</TD>
<TD
</TD>
<TD>
<input name="btnClear" type="Button" value="  C  " onclick="Clear()">
</TD>
<TD><input name="btnClearEntry" type="Button" value="  CE " onclick="ClearEntry()">
</TD>
</TR>
<TR>
<TD>
<input name="btnSeven" type="Button" value="  7  " onclick="NumPressed(7)">
</TD>
<TD>
<input name="btnEight" type="Button" value="  8  " onclick="NumPressed(8)">
</TD>
<TD>
<input name="btnNine" type="Button" value="  9  " onclick="NumPressed(9)">
</TD>
<TD>
</TD>
<TD>
<input name="btnNeg" type="Button" value=" +/- " onclick="Neg()">
</TD>
<TD>
<input name="btnPercent" type="Button" value="  % " onclick="Percent()">
</TD>
</TR>
<TR>
<TD>
<input name="btnFour" type="Button" value="  4  " onclick="NumPressed(4)">
</TD>
<TD>
<input name="btnFive" type="Button" value="  5  " onclick="NumPressed(5)">
</TD>
<TD>
<input name="btnSix" type="Button" value="  6  " onclick="NumPressed(6)">
</TD>
<TD>
</TD>
<TD align=middle><input name="btnPlus" type="Button" value="  +  " onclick="Operation('+')">
</TD>
<TD align=middle><input name="btnMinus" type="Button" value="   -   " onclick="Operation('-')">
</TD>
</TR>
<TR>
<TD>
<input name="btnOne" type="Button" value="  1  " onclick="NumPressed(1)">
</TD>
<TD>
<input name="btnTwo" type="Button" value="  2  " onclick="NumPressed(2)">
</TD>
<TD>
<input name="btnThree" type="Button" value="  3  " onclick="NumPressed(3)">
</TD>
<TD>
</TD>
<TD align=middle><input name="btnMultiply" type="Button" value="  *  " onclick="Operation('*')">
</TD>
<TD align=middle><input name="btnDivide" type="Button" value="   /   " onclick="Operation('/')">
</TD>
</TR>
<TR>
<TD>
<input name="btnZero" type="Button" value="  0  " onclick="NumPressed(0)">
</TD>
<TD>
<input name="btnDecimal" type="Button" value="   .  " onclick="Decimal()">
</TD>
<TD colspan=3>
</TD>
<TD>
<input name="btnEquals" type="Button" value="  =  " onclick="Operation('=')">
</TD>
</TR>
</TABLE>
</TABLE>
</B>
</FORM>
</CENTER>
<font face="Verdana, Arial, Helvetica" size=2>
<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
var FKeyPad = document.Keypad;
var Accumulate = 0;
var FlagNewNum = false;
var PendingOp = "";
function NumPressed (Num) {
if (FlagNewNum) {
FKeyPad.ReadOut.value  = Num;
FlagNewNum = false;
   }
else {
if (FKeyPad.ReadOut.value == "0")
FKeyPad.ReadOut.value = Num;
else
FKeyPad.ReadOut.value += Num;
   }
}
function Operation (Op) {
var Readout = FKeyPad.ReadOut.value;
if (FlagNewNum && PendingOp != "=");
else
{
FlagNewNum = true;
if ( '+' == PendingOp )
Accumulate += parseFloat(Readout);
else if ( '-' == PendingOp )
Accumulate -= parseFloat(Readout);
else if ( '/' == PendingOp )
Accumulate /= parseFloat(Readout);
else if ( '*' == PendingOp )
Accumulate *= parseFloat(Readout);
else
Accumulate = parseFloat(Readout);
FKeyPad.ReadOut.value = Accumulate;
PendingOp = Op;
   }
}
function Decimal () {
var curReadOut = FKeyPad.ReadOut.value;
if (FlagNewNum) {
curReadOut = "0.";
FlagNewNum = false;
   }
else
{
if (curReadOut.indexOf(".") == -1)
curReadOut += ".";
   }
FKeyPad.ReadOut.value = curReadOut;
}
function ClearEntry () {
FKeyPad.ReadOut.value = "0";
FlagNewNum = true;
}
function Clear () {
Accumulate = 0;
PendingOp = "";
ClearEntry();
}
function Neg () {
FKeyPad.ReadOut.value = parseFloat(FKeyPad.ReadOut.value) * -1;
}
function Percent () {
FKeyPad.ReadOut.value = (parseFloat(FKeyPad.ReadOut.value) / 100) * parseFloat(Accumulate);
}
// End -->
</SCRIPT>
