<?

require('./Empresa.php');
require('./EmpresaMagica.php');
/*
$empresa = new Empresa("B495665548","Mola tu Web","Zamora");//sin constructor se podria dejar vacio

print_r($empresa);
$empresa->setCif("B495665548");
$empresa->setNombre("Mola tu Web"); //nombre = "mola tu web" funcionaria si el atributo nombre fuera public
print_r($empresa);
*/
echo "<br>";echo "<br>";
$empresaM = new EmpresaM("B495665548","Mi Web","Zamora");
$empresaM1 = new EmpresaM("B495665548","Mi Web","Zamora");
$empresaM2 = new EmpresaM("B495665548","Mi Web","Zamora");
print_r($empresaM);
echo "<br>";
echo $empresaM->cif;
echo "<br>";
$empresaM->cif = "A123547683";
$empresaM->cifa = "AAAAAAAAAA";
echo "<br>";
echo $empresaM->cif;
echo "<br>";
print_r($empresaM);
echo "<br>";
echo $empresaM; //usando el tostring

echo EmpresaM::saluda();
echo "<br>";
echo empresaM::$cont;