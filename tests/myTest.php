<?php
use PHPUnit\Framework\TestCase;
require_once dirname(__DIR__).'/controllers/TypeofloansController.php';
require_once dirname(__DIR__).'/models/Typeofloans.php';


final class myTest extends TestCase
{
    // Méthodes de test
    
public  function testExample()
{
    $this->assertTrue(true);

}
public function testAddLoan()
{
   // return $this->assertTrue(true);
    // Préparer les données du formulaire de test
    $_POST['submit']=true;
    $_POST['loanType'] = 'Type de crédit';
    $_POST['periode'] = 'Période';
    $_POST['description'] = 'Description';
    $_POST['montant'] = '1234';

    // Exécuter le code de test
    $loan = new TypeofloansController();
  
    $this->assertTrue($loan->addLoan());
    // Vérifier les résultats attendus
    /*$this->assertIsString($loan->loanType);
    $this->assertIsString($loan->periode);
    $this->assertIsString($loan->description);
    $this->assertIsNumeric($loan->montant);*/
}

}
