<?php
namespace App\Tests;
use App\CAL;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/CAL.php';

class CALTest extends TestCase
{
    public function testName()
    {
        $client = new CAL();
        //有效等價類(1) 上點 3
        $client->Setname("Bob");
        $expect = "ok";
        $this->assertEquals("Bob", $client->Getname());//順便測
        $this->assertEquals($expect, $client->validationName());
        //有效等價類(1) 上點 30
        $client->Setname("GiannisSinaOugkoAntetokounmpoo");
        $expect = "ok";
        $this->assertEquals($expect, $client->validationName());
        //有效等價類(1) 離點 4
        $client->Setname("Paul");
        $expect = "ok";
        $this->assertEquals($expect, $client->validationName());
        //有效等價類(1) 離點 29
        $client->Setname("GiannisSinaOugkoAntetokounmpo");
        $expect = "ok";
        $this->assertEquals($expect, $client->validationName());
        //有效等價類(1) 內點 5 
        $client->Setname("Curry");
        $expect = "ok";
        $this->assertEquals($expect, $client->validationName());
        //無效等價類(3) 離點 31 
        $client->Setname("UvweweweweOnyetenyevweUvwewenum");
        $expect = "名字過長";
        $this->assertEquals($expect, $client->validationName());
        //無效等價類(2) 離點 2 
        $client->Setname("An");
        $expect = "名字長度不足";
        $this->assertEquals($expect, $client->validationName());
        //無效等價類(4)  
        $client->Setname("anny");
        $expect = "第一個字元未大寫";
        $this->assertEquals($expect, $client->validationName());
        //無效等價類(5)  
        $client->Setname("");
        $expect = "姓名不可為空";
        $this->assertEquals($expect, $client->validationName());
        //無效等價類(6)  
        $client->Setname("Br ain");
        $expect = "姓名中不可包含空格";
        $this->assertEquals($expect, $client->validationName());
        //無效等價類(7)  
        $client->Setname("Lora21");
        $expect = "姓名中不可包含數字";
        $this->assertEquals($expect, $client->validationName());
        //無效等價類(8)  
        $client->Setname("Brain#");
        $expect = "姓名中不可包含特殊字元";
        $this->assertEquals($expect, $client->validationName());
    }
    public function testEmail()
    {
        $client = new CAL();
        //有效等價類(9) UserName上點 6
        $client->Setemail("Bob097@gmail.com");
        $expect = "ok";
        $this->assertEquals("Bob097@gmail.com", $client->Getemail());//順便測
        $this->assertEquals($expect, $client->validationEmail());
        //有效等價類(9) UserName上點 30
        $client->Setemail("GiannisSinaOugkoAntetokounmpo3@gmail.com");
        $expect = "ok";
        $this->assertEquals($expect, $client->validationEmail());
        //有效等價類(9) UserName離點 7
        $client->Setemail("Paul914@gmail.com");
        $expect = "ok";
        $this->assertEquals($expect, $client->validationEmail());
        //有效等價類(9) UserName離點 29
        $client->Setemail("GiannisSinaOugkoAntetokounmpo@gmail.com");
        $expect = "ok";
        $this->assertEquals($expect, $client->validationEmail());
        //有效等價類(9) UserName內點  
        $client->Setemail("CurryGS30@gmail.com");
        $expect = "ok";
        $this->assertEquals($expect, $client->validationEmail());
        //無效等價類(11) UserName離點 31  
        $client->Setemail("UvweweweweOnyetenyevweUvwewenum@gmail.com");
        $expect = "信箱用戶名過長";
        $this->assertEquals($expect, $client->validationEmail());
        //無效等價類(10) UserName離點  5
        $client->Setemail("Curry@gmail.com");
        $expect = "信箱用戶名長度不足";
        $this->assertEquals($expect, $client->validationEmail());
        //無效等價類(14) 
        $client->Setemail("");
        $expect = "信箱不可為空";
        $this->assertEquals($expect, $client->validationEmail());
        //無效等價類(12) 
        $client->Setemail("csz$999@gmail.com");
        $expect = "姓名中不可包含特殊字元";
        $this->assertEquals($expect, $client->validationEmail());
        //無效等價類(15) 
        $client->Setemail("Lora21@thu.edu.tw");
        $expect = "請使用gmail";
        $this->assertEquals($expect, $client->validationEmail());
        //無效等價類(13) 
        $client->Setemail("Abc 332@gmail.com");
        $expect = "姓名中不可包含空格";
        $this->assertEquals($expect, $client->validationEmail());
    }
    public function testPlan()
    {
        $client = new CAL();
        //有效等價類(16) 
        $client->Setplan("1");
        $expect = "ok";
        $this->assertEquals("1", $client->Getplan());//順便測
        $this->assertEquals($expect, $client->validationPlan());
        //有效等價類(16) 
        $client->Setplan("2");
        $expect = "ok";
        $this->assertEquals($expect, $client->validationPlan());
        //有效等價類(16) 
        $client->Setplan("3");
        $expect = "ok";
        $this->assertEquals($expect, $client->validationPlan());
        //有效等價類(16) 
        $client->Setplan("4");
        $expect = "ok";
        $this->assertEquals($expect, $client->validationPlan());
        //無效等價類(17) 
        $client->Setplan("5");
        $expect = "不可為1~4以外字元";
        $this->assertEquals($expect, $client->validationPlan());
        //無效等價類(18) 
        $client->Setplan("");
        $expect = "方案不可為空";
        $this->assertEquals($expect, $client->validationPlan());
    }
    public function testHours()
    {
        $client = new CAL();
        //有效等價類(19) 上點 0
        $client->Sethours("0");
        $expect = "ok";
        $this->assertEquals(0, $client->Gethours());//順便測
        $this->assertEquals($expect, $client->validationHours());
        //有效等價類(19) 上點 876000
        $client->Sethours("876000");
        $expect = "ok";
        $this->assertEquals($expect, $client->validationHours());
        //有效等價類(19) 離點 1
        $client->Sethours("1");
        $expect = "ok";
        $this->assertEquals($expect, $client->validationHours());
        //有效等價類(19) 離點 875999
        $client->Sethours("875999");
        $expect = "ok";
        //有效等價類(19) 內點 3
        $client->Sethours("3");
        $expect = "ok";
        $this->assertEquals($expect, $client->validationHours());
        //無效等價類(22) 離點 876001
        $client->Sethours("876001");
        $expect = "時數過大";
        $this->assertEquals($expect, $client->validationHours());
        //無效等價類(21) 離點 -1
        $client->Sethours("-1");
        $expect = "時數不可為負";
        $this->assertEquals($expect, $client->validationHours());
        //無效等價類(20) 
        $client->Sethours("1.1");
        $expect = "時數不可為小數";
        $this->assertEquals($expect, $client->validationHours());
        //無效等價類(23) 
        $client->Sethours("");
        $expect = "時數不可為空";
        $this->assertEquals($expect, $client->validationHours());
        //無效等價類(24) 
        $client->Sethours(" 1");
        $expect = "時數中不可包含空格";
        $this->assertEquals($expect, $client->validationHours());
        //無效等價類(25) 
        $client->Sethours("#1");
        $expect = "時數中不可包含特殊字元";
        $this->assertEquals($expect, $client->validationHours());
    }
    public function testG()
    {
        $client = new CAL();
        //有效等價類(26) 
        $client->SetG("4G");
        $expect = "ok";
        $this->assertEquals("4G", $client->GetG());//順便測
        $this->assertEquals($expect, $client->validationG());
        //有效等價類(26) 
        $client->SetG("5G");
        $expect = "ok";
        $this->assertEquals($expect, $client->validationG());
        //無效等價類(27) 
        $client->SetG("4");
        $expect = "並非4G/5G";
        $this->assertEquals($expect, $client->validationG());
        //無效等價類(28) 
        $client->SetG("");
        $expect = "4G/5G不可為空";
        $this->assertEquals($expect, $client->validationG());
        //無效等價類(29) 
        $client->SetG(" 1");
        $expect = "4G/5G中不可包含空格";
        $this->assertEquals($expect, $client->validationG());
        //無效等價類(30) 
        $client->SetG("#1");
        $expect = "4G/5G中不可包含特殊字元";
        $this->assertEquals($expect, $client->validationG());
    }
    public function testCal()
    {
        $client = new CAL();
        //test1
        $client->Setplan("1");
        $client->Sethours("3");
        $client->SetG("6G");
        $expect = "並非4G或5G";
        $this->assertEquals($expect, $client->validationCal());
        //test2
        $client->Setplan("1");
        $client->Sethours("3");
        $client->SetG("5G");
        $expect = 1560;
        $this->assertEquals($expect, $client->validationCal());
        //test3
        $client->Setplan("1");
        $client->Sethours("3");
        $client->SetG("4G");
        $expect = 1200;
        $this->assertEquals($expect, $client->validationCal());
        //test4
        $client->Setplan("2");
        $client->Sethours("3");
        $client->SetG("6G");
        $expect = "並非4G或5G";
        $this->assertEquals($expect, $client->validationCal());
        //test5
        $client->Setplan("2");
        $client->Sethours("3");
        $client->SetG("5G");
        $expect = 1080;
        $this->assertEquals($expect, $client->validationCal());
        //test6
        $client->Setplan("2");
        $client->Sethours("3");
        $client->SetG("4G");
        $expect = 900;
        $this->assertEquals($expect, $client->validationCal());
        //test7
        $client->Setplan("3");
        $client->Sethours("3");
        $client->SetG("6G");
        $expect = "並非4G或5G";
        $this->assertEquals($expect, $client->validationCal());
        //test8
        $client->Setplan("3");
        $client->Sethours("3");
        $client->SetG("5G");
        $expect = 660;
        $this->assertEquals($expect, $client->validationCal());
        //test9
        $client->Setplan("3");
        $client->Sethours("3");
        $client->SetG("4G");
        $expect = 600;
        $this->assertEquals($expect, $client->validationCal());
        //test10
        $client->Setplan("4");
        $client->Sethours("3");
        $client->SetG("6G");
        $expect = "並非4G或5G";
        $this->assertEquals($expect, $client->validationCal());
        //test11
        $client->Setplan("4");
        $client->Sethours("3");
        $client->SetG("5G");
        $expect = 300;
        $this->assertEquals($expect, $client->validationCal());
        //test12
        $client->Setplan("4");
        $client->Sethours("3");
        $client->SetG("4G");
        $expect = 300;
        $this->assertEquals($expect, $client->validationCal());
        //test13
        $client->Setplan("5");
        $client->Sethours("3");
        $client->SetG("4G");
        $expect = "無此方案";
        $this->assertEquals($expect, $client->validationCal());
        //test14
        $client->Setplan("1");
        $client->Sethours("-1");
        $client->SetG("4G");
        $expect = "時數輸入錯誤 無法計算";
        $this->assertEquals($expect, $client->validationCal());
        
    }
}