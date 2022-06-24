<?php
namespace App;
class CAL
{
    private $name;
    private $email;
    private $plan;
    private $hours;
    private $G;

    public function Setname($input)
    {
        $this->name = $input;
    }

    public function Setemail($input)
    {
        $this->email = $input;
    }

    public function Setplan($input)
    {
        $this->plan = $input;
    }

    public function Sethours($input)
    {
        $this->hours = $input;
    }

    public function SetG($input)
    {
        $this->G = $input;
    }

    public function Getname()
    {
        return $this->name;
    }

    public function Getemail()
    {
        return $this->email;
    }

    public function Getplan()
    {
        return $this->plan;
    }

    public function Gethours()
    {
        return $this->hours;
    }

    public function GetG()
    {
        return $this->G;
    }
    
    public function validationName()
    {
        //長度檢查
        if(strlen($this->name)>=3&&strlen($this->name)<=30)
        {
            //開頭大小寫
            if(ord($this->name[0])>=65&&ord($this->name[0])<=90)
            {
                //逐一檢查
                for($i=0;$i<strlen($this->name);$i++)
                {
                    //大小寫
                    if((ord($this->name[$i]) >=65&&ord($this->name[$i])<=90)||(ord($this->name[$i]) >=97&&ord($this->name[$i])<=122));
                    //空格
                    else if(ord($this->name[$i]) == 32) return "姓名中不可包含空格";
                    //數字
                    else if(ord($this->name[$i]) >=48&&ord($this->name[$i])<=57) return "姓名中不可包含數字";
                    //特殊字元
                    else return "姓名中不可包含特殊字元";
                }
                //通過
                return "ok";
            }
            else
            {
                return"第一個字元未大寫";
            }
        }
        else
        {   
            //空字串 過短 過長
            if(strlen($this->name)==0)  return"姓名不可為空";
            elseif(strlen($this->name)>0&&strlen($this->name)<3) return"名字長度不足";
            else return"名字過長";
        }
    }

    public function validationEmail()
    {
        //長度檢查
        if(strlen($this->email)>=16&&strlen($this->email)<=40)
        {
            $Etemp = "";
            //信箱擷取
            for($i=strlen($this->email)-10;$i<strlen($this->email);$i++)
            {
                $Etemp = $Etemp.$this->email[$i];        
            }
            //是否使用Gmail
            if($Etemp=="@gmail.com")    
            {
                //逐一檢查
                for($i=0;$i<strlen($this->email)-10;$i++)
                {
                    //大小寫
                    if((ord($this->email[$i]) >=65&&ord($this->email[$i])<=90)||(ord($this->email[$i]) >=97&&ord($this->email[$i])<=122));
                    //數字
                    else if(ord($this->email[$i]) >=48&&ord($this->email[$i])<=57);
                    //空格
                    else if(ord($this->email[$i]) == 32) return "姓名中不可包含空格";
                    //特殊字元
                    else return "姓名中不可包含特殊字元";
                }
                //通過
                return "ok";
            }
            else return"請使用gmail";    
        }
        else
        {   
            //空字串 過短 過長
            if(strlen($this->email)==0)  return"信箱不可為空";
            elseif(strlen($this->email)>=10&&strlen($this->email)<16) return"信箱用戶名長度不足";
            else return"信箱用戶名過長";
        }
    }
    public function validationPlan()
    {
        if($this->plan=="1"||$this->plan=="2"||$this->plan=="3"||$this->plan=="4")return "ok";
        else
        {
            if(strlen($this->plan)==0)return"方案不可為空";
            else return"不可為1~4以外字元";
        }
    }
    
}
?>