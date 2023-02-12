<?php
 
class equation2 {
   public $p=array();
   public $x=array();
   public $dec;
    
   public function __construct($a,$b,$c,$dec) {
	
             if($dec==""){$dec="2";}
             if(isset($a) && $a!=""){
                $this->p['a']=(float)$a;
                $this->p['b']=(float)$b;
                $this->p['c']=(float)$c;
                $this->dec=(int)$dec;
                }
             }//construct
  private  function D(){
            if($this->p['a']!=0){
               $delta=pow($this->p['b'],2)-4*$this->p['a']*$this->p['c'];
            return $delta;
            }else{$this->root();}
		         }//D
   public function checkD(){
             if($this->D()>0){     return 1;}
             elseif($this->D()==0){return 0;}
             elseif($this->D()<0) { return -1;}
                      }//checkD
  private function root(){ 
	         if($this->p['b']!=0){ 
			 echo "".-$this->p['c']/$this->p['b'].".";
			 exit;}
	         elseif($this->p['c']!=0){ exit('');}
	         else{ exit('phương trình có vô số nghiệm');}
	        }				  
         
   public function roots(){
            switch ($this->checkD()) {
            case 1: {$this->x[0]=(-$this->p['b']-sqrt($this->D()))/(2*$this->p['a']);
                $this->x[1]=(-$this->p['b']+sqrt($this->D()))/(2*$this->p['a']);
                    return $this->x;
            }
                        break;
            case 0:{$this->x[0]=$this->x[1]=-$this->p['b']/(2*$this->p['a']);
                    return $this->x;
            }
                        break;
            case -1:{
			         $this->x[0]=-$this->p['b']/(2*$this->p['a']);
                     $this->x[1]=sqrt(-$this->D())/(2*$this->p['a']);
                    return $this->x;
            }
                        break;
            default:
                        break;
            }//switch    
    
            }//roots
   
  public function printReal(){
 
            printf("x1 = %10.".$this->dec."f;<br/>x2 = %10.".$this->dec."f.<br/>",$this->x[0],$this->x[1]);
            }//printReal
   
  public function printComplex(){
           if($this->x[1]>0){
           printf("x1 = %10.".$this->dec."f&nbsp;+&nbsp;%10.".$this->dec."fi;<br/>",$this->x[0],$this->x[1]);
           printf("x2 = %10.".$this->dec."f&nbsp;-&nbsp;%10.".$this->dec."fi.<br/>",$this->x[0],$this->x[1]);
		   }
		   elseif($this->x[1]<0){
		   printf("x1 = %10.".$this->dec."f-%10.".$this->dec."fi;<br/>",$this->x[0],-$this->x[1]);
           printf("x2 = %10.".$this->dec."f&nbsp;+&nbsp;%10.".$this->dec."fi.<br/>",$this->x[0],-$this->x[1]);
		   }
   
          }//printComplex
       }//equation2
?>