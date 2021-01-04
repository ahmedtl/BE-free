function maj1()
{f.T9.value=f.T9.value.toUpperCase();}
function maj2()
{f.T10.value=f.T10.value.toUpperCase();}
function affiche()
{f.T1.value=new Date().getDate();
f.T2.value= new Date().getMonth()+1;
f.T3.value=new Date().getFullYear();
f.T4.value=new Date().getHours();
f.T5.value=new Date().getMinutes();
f.T6.value=new Date().getSeconds();
}
function alpha(ch)
{k="AZERTYUIOPQSDFGHJKLMWXCVBN0123456789";
r=true;
for(i=0;i<ch.length;i++)
if (k.indexOf(ch.charAt(i))==-1) r=false;
return r;
}
function verif()
{cn=f.Ncin.value;
n=f.T9.value;
p=f.T10.value;
cvv=f.T11.value;
ncarte=f.T12.value;


if ((cn.length!=8)||(isNaN(cn)))
{alert("cin incorrecte "); return false;}
if ((n=="")||(alpha(n)==false))
{alert("nom incorrecte "); return false;}
if ((p=="")||(alpha(p)==false))
{alert("prenom incorrecte "); return false;}
if ((cvv.length!=3)||(isNaN(cvv)))
{alert("cvv incorrecte "); return false;}
if ((ncarte.length!=14)||(isNaN(ncarte)))
{alert("numero du carte incorrecte "); return false;}
s1=f.D1.options.selectedIndex;
s2=f.D2.options.selectedIndex;
if((s1<=0)||(s2<=0)||(f.D1[s1].value==f.D2[s2].value))
{alert("depart et destination obligatoires et distincts"); return false;}



}