<?php
/**
 * File for class ColibriERPStructVATDeclarationDef
 *
 * PHP Version 5
 *
 * @category   ColibriERP
 * @package    ColibriERP
 * @subpackage Structs
 * @author     Georgi Nachev <jooorooo@gmail.com>
 * @license    https://opensource.org/licenses/MIT MIT
 * @version    GIT: 1.0.0 In development.
 * @link       http://simexis.com
 * @date       2017-06-01
 */
/**
 * This class stands for ColibriERPStructVATDeclarationDef
 *  originally named VATDeclarationDef
 *
 * PHP Version 5
 *
 * @category   ColibriERP
 * @package    ColibriERP
 * @subpackage Structs
 * @author     Georgi Nachev <jooorooo@gmail.com>
 * @license    https://opensource.org/licenses/MIT MIT
 * @version    GIT: 1.0.0 In development.
 * @link       http://simexis.com
 * @date       2017-06-01
 */
class ColibriERPStructVATDeclarationDef extends ColibriERPWsdlClass
{
    /**
     * The idVATDeclaration
     *
     * @var integer
     */
    public $idVATDeclaration;
    /**
     * The FromDate
     *
     * @var string
     */
    public $FromDate;
    /**
     * The ToDate
     *
     * @var string
     */
    public $ToDate;
    /**
     * The C01
     *
     * @var float
     */
    public $C01;
    /**
     * The C11
     *
     * @var float
     */
    public $C11;
    /**
     * The C12
     *
     * @var float
     */
    public $C12;
    /**
     * The C13
     *
     * @var float
     */
    public $C13;
    /**
     * The C14
     *
     * @var float
     */
    public $C14;
    /**
     * The C15
     *
     * @var float
     */
    public $C15;
    /**
     * The C16
     *
     * @var float
     */
    public $C16;
    /**
     * The C17
     *
     * @var float
     */
    public $C17;
    /**
     * The C18
     *
     * @var float
     */
    public $C18;
    /**
     * The C19
     *
     * @var float
     */
    public $C19;
    /**
     * The C20
     *
     * @var float
     */
    public $C20;
    /**
     * The C02
     *
     * @var float
     */
    public $C02;
    /**
     * The C03
     *
     * @var float
     */
    public $C03;
    /**
     * The C31
     *
     * @var float
     */
    public $C31;
    /**
     * The C32
     *
     * @var float
     */
    public $C32;
    /**
     * The C33
     *
     * @var float
     */
    public $C33;
    /**
     * The C30
     *
     * @var float
     */
    public $C30;
    /**
     * The C21
     *
     * @var float
     */
    public $C21;
    /**
     * The C22
     *
     * @var float
     */
    public $C22;
    /**
     * The C23
     *
     * @var float
     */
    public $C23;
    /**
     * The C24
     *
     * @var float
     */
    public $C24;
    /**
     * The C42
     *
     * @var float
     */
    public $C42;
    /**
     * The C43
     *
     * @var float
     */
    public $C43;
    /**
     * The C40
     *
     * @var float
     */
    public $C40;
    /**
     * The C50
     *
     * @var float
     */
    public $C50;
    /**
     * The C60
     *
     * @var float
     */
    public $C60;
    /**
     * The C70
     *
     * @var float
     */
    public $C70;
    /**
     * The C71
     *
     * @var float
     */
    public $C71;
    /**
     * The C72
     *
     * @var float
     */
    public $C72;
    /**
     * The C72Date
     *
     * @var float
     */
    public $C72Date;
    /**
     * The C80
     *
     * @var float
     */
    public $C80;
    /**
     * The C81
     *
     * @var float
     */
    public $C81;
    /**
     * The C82
     *
     * @var float
     */
    public $C82;
    /**
     * The Is77a2
     *
     * @var float
     */
    public $Is77a2;
    /**
     * The OOLastX
     *
     * @var float
     */
    public $OOLastX;
    /**
     * The ExpLastX
     *
     * @var float
     */
    public $ExpLastX;
    /**
     * The ExportDate
     *
     * @var string
     */
    public $ExportDate;
    /**
     * The ExportAuthPerson
     *
     * @var string
     */
    public $ExportAuthPerson;
    /**
     * The ExportPhone
     *
     * @var string
     */
    public $ExportPhone;
    /**
     * The ExportLastRegDate
     *
     * @var string
     */
    public $ExportLastRegDate;
    /**
     * The ExportLastUnRegDate
     *
     * @var string
     */
    public $ExportLastUnRegDate;
    /**
     * The ExportBranch
     *
     * @var string
     */
    public $ExportBranch;
    /**
     * The APP
     *
     * @var array
     */
    public $APP;
    /**
     * Constructor method for VATDeclarationDef
     *
     * @see parent::__construct()
     *
     * @param integer $_idVATDeclaration    expect integer
     * @param string  $_fromDate            expect string
     * @param string  $_toDate              expect string
     * @param float   $_c01                 expect float
     * @param float   $_c11                 expect float
     * @param float   $_c12                 expect float
     * @param float   $_c13                 expect float
     * @param float   $_c14                 expect float
     * @param float   $_c15                 expect float
     * @param float   $_c16                 expect float
     * @param float   $_c17                 expect float
     * @param float   $_c18                 expect float
     * @param float   $_c19                 expect float
     * @param float   $_c20                 expect float
     * @param float   $_c02                 expect float
     * @param float   $_c03                 expect float
     * @param float   $_c31                 expect float
     * @param float   $_c32                 expect float
     * @param float   $_c33                 expect float
     * @param float   $_c30                 expect float
     * @param float   $_c21                 expect float
     * @param float   $_c22                 expect float
     * @param float   $_c23                 expect float
     * @param float   $_c24                 expect float
     * @param float   $_c42                 expect float
     * @param float   $_c43                 expect float
     * @param float   $_c40                 expect float
     * @param float   $_c50                 expect float
     * @param float   $_c60                 expect float
     * @param float   $_c70                 expect float
     * @param float   $_c71                 expect float
     * @param float   $_c72                 expect float
     * @param float   $_c72Date             expect float
     * @param float   $_c80                 expect float
     * @param float   $_c81                 expect float
     * @param float   $_c82                 expect float
     * @param float   $_is77a2              expect float
     * @param float   $_oOLastX             expect float
     * @param float   $_expLastX            expect float
     * @param string  $_exportDate          expect string
     * @param string  $_exportAuthPerson    expect string
     * @param string  $_exportPhone         expect string
     * @param string  $_exportLastRegDate   expect string
     * @param string  $_exportLastUnRegDate expect string
     * @param string  $_exportBranch        expect string
     * @param array   $_aPP                 expect array
     *
     * @return ColibriERPStructVATDeclarationDef
     */
    public function __construct($_idVATDeclaration = null,$_fromDate = null,$_toDate = null,$_c01 = null,$_c11 = null,$_c12 = null,$_c13 = null,$_c14 = null,$_c15 = null,$_c16 = null,$_c17 = null,$_c18 = null,$_c19 = null,$_c20 = null,$_c02 = null,$_c03 = null,$_c31 = null,$_c32 = null,$_c33 = null,$_c30 = null,$_c21 = null,$_c22 = null,$_c23 = null,$_c24 = null,$_c42 = null,$_c43 = null,$_c40 = null,$_c50 = null,$_c60 = null,$_c70 = null,$_c71 = null,$_c72 = null,$_c72Date = null,$_c80 = null,$_c81 = null,$_c82 = null,$_is77a2 = null,$_oOLastX = null,$_expLastX = null,$_exportDate = null,$_exportAuthPerson = null,$_exportPhone = null,$_exportLastRegDate = null,$_exportLastUnRegDate = null,$_exportBranch = null,$_aPP = null)
    {
        parent::__construct(array('idVATDeclaration'=>$_idVATDeclaration,'FromDate'=>$_fromDate,'ToDate'=>$_toDate,'C01'=>$_c01,'C11'=>$_c11,'C12'=>$_c12,'C13'=>$_c13,'C14'=>$_c14,'C15'=>$_c15,'C16'=>$_c16,'C17'=>$_c17,'C18'=>$_c18,'C19'=>$_c19,'C20'=>$_c20,'C02'=>$_c02,'C03'=>$_c03,'C31'=>$_c31,'C32'=>$_c32,'C33'=>$_c33,'C30'=>$_c30,'C21'=>$_c21,'C22'=>$_c22,'C23'=>$_c23,'C24'=>$_c24,'C42'=>$_c42,'C43'=>$_c43,'C40'=>$_c40,'C50'=>$_c50,'C60'=>$_c60,'C70'=>$_c70,'C71'=>$_c71,'C72'=>$_c72,'C72Date'=>$_c72Date,'C80'=>$_c80,'C81'=>$_c81,'C82'=>$_c82,'Is77a2'=>$_is77a2,'OOLastX'=>$_oOLastX,'ExpLastX'=>$_expLastX,'ExportDate'=>$_exportDate,'ExportAuthPerson'=>$_exportAuthPerson,'ExportPhone'=>$_exportPhone,'ExportLastRegDate'=>$_exportLastRegDate,'ExportLastUnRegDate'=>$_exportLastUnRegDate,'ExportBranch'=>$_exportBranch,'APP'=>$_aPP), false);
    }
    /**
     * Get idVATDeclaration value
     *
     * @return integer|null
     */
    public function getIdVATDeclaration()
    {
        return $this->idVATDeclaration;
    }
    /**
     * Set idVATDeclaration value
     *
     * @param integer $_idVATDeclaration the idVATDeclaration
     *
     * @return integer
     */
    public function setIdVATDeclaration($_idVATDeclaration)
    {
        return ($this->idVATDeclaration = $_idVATDeclaration);
    }
    /**
     * Get FromDate value
     *
     * @return string|null
     */
    public function getFromDate()
    {
        return $this->FromDate;
    }
    /**
     * Set FromDate value
     *
     * @param string $_fromDate the FromDate
     *
     * @return string
     */
    public function setFromDate($_fromDate)
    {
        return ($this->FromDate = $_fromDate);
    }
    /**
     * Get ToDate value
     *
     * @return string|null
     */
    public function getToDate()
    {
        return $this->ToDate;
    }
    /**
     * Set ToDate value
     *
     * @param string $_toDate the ToDate
     *
     * @return string
     */
    public function setToDate($_toDate)
    {
        return ($this->ToDate = $_toDate);
    }
    /**
     * Get C01 value
     *
     * @return float|null
     */
    public function getC01()
    {
        return $this->C01;
    }
    /**
     * Set C01 value
     *
     * @param float $_c01 the C01
     *
     * @return float
     */
    public function setC01($_c01)
    {
        return ($this->C01 = $_c01);
    }
    /**
     * Get C11 value
     *
     * @return float|null
     */
    public function getC11()
    {
        return $this->C11;
    }
    /**
     * Set C11 value
     *
     * @param float $_c11 the C11
     *
     * @return float
     */
    public function setC11($_c11)
    {
        return ($this->C11 = $_c11);
    }
    /**
     * Get C12 value
     *
     * @return float|null
     */
    public function getC12()
    {
        return $this->C12;
    }
    /**
     * Set C12 value
     *
     * @param float $_c12 the C12
     *
     * @return float
     */
    public function setC12($_c12)
    {
        return ($this->C12 = $_c12);
    }
    /**
     * Get C13 value
     *
     * @return float|null
     */
    public function getC13()
    {
        return $this->C13;
    }
    /**
     * Set C13 value
     *
     * @param float $_c13 the C13
     *
     * @return float
     */
    public function setC13($_c13)
    {
        return ($this->C13 = $_c13);
    }
    /**
     * Get C14 value
     *
     * @return float|null
     */
    public function getC14()
    {
        return $this->C14;
    }
    /**
     * Set C14 value
     *
     * @param float $_c14 the C14
     *
     * @return float
     */
    public function setC14($_c14)
    {
        return ($this->C14 = $_c14);
    }
    /**
     * Get C15 value
     *
     * @return float|null
     */
    public function getC15()
    {
        return $this->C15;
    }
    /**
     * Set C15 value
     *
     * @param float $_c15 the C15
     *
     * @return float
     */
    public function setC15($_c15)
    {
        return ($this->C15 = $_c15);
    }
    /**
     * Get C16 value
     *
     * @return float|null
     */
    public function getC16()
    {
        return $this->C16;
    }
    /**
     * Set C16 value
     *
     * @param float $_c16 the C16
     *
     * @return float
     */
    public function setC16($_c16)
    {
        return ($this->C16 = $_c16);
    }
    /**
     * Get C17 value
     *
     * @return float|null
     */
    public function getC17()
    {
        return $this->C17;
    }
    /**
     * Set C17 value
     *
     * @param float $_c17 the C17
     *
     * @return float
     */
    public function setC17($_c17)
    {
        return ($this->C17 = $_c17);
    }
    /**
     * Get C18 value
     *
     * @return float|null
     */
    public function getC18()
    {
        return $this->C18;
    }
    /**
     * Set C18 value
     *
     * @param float $_c18 the C18
     *
     * @return float
     */
    public function setC18($_c18)
    {
        return ($this->C18 = $_c18);
    }
    /**
     * Get C19 value
     *
     * @return float|null
     */
    public function getC19()
    {
        return $this->C19;
    }
    /**
     * Set C19 value
     *
     * @param float $_c19 the C19
     *
     * @return float
     */
    public function setC19($_c19)
    {
        return ($this->C19 = $_c19);
    }
    /**
     * Get C20 value
     *
     * @return float|null
     */
    public function getC20()
    {
        return $this->C20;
    }
    /**
     * Set C20 value
     *
     * @param float $_c20 the C20
     *
     * @return float
     */
    public function setC20($_c20)
    {
        return ($this->C20 = $_c20);
    }
    /**
     * Get C02 value
     *
     * @return float|null
     */
    public function getC02()
    {
        return $this->C02;
    }
    /**
     * Set C02 value
     *
     * @param float $_c02 the C02
     *
     * @return float
     */
    public function setC02($_c02)
    {
        return ($this->C02 = $_c02);
    }
    /**
     * Get C03 value
     *
     * @return float|null
     */
    public function getC03()
    {
        return $this->C03;
    }
    /**
     * Set C03 value
     *
     * @param float $_c03 the C03
     *
     * @return float
     */
    public function setC03($_c03)
    {
        return ($this->C03 = $_c03);
    }
    /**
     * Get C31 value
     *
     * @return float|null
     */
    public function getC31()
    {
        return $this->C31;
    }
    /**
     * Set C31 value
     *
     * @param float $_c31 the C31
     *
     * @return float
     */
    public function setC31($_c31)
    {
        return ($this->C31 = $_c31);
    }
    /**
     * Get C32 value
     *
     * @return float|null
     */
    public function getC32()
    {
        return $this->C32;
    }
    /**
     * Set C32 value
     *
     * @param float $_c32 the C32
     *
     * @return float
     */
    public function setC32($_c32)
    {
        return ($this->C32 = $_c32);
    }
    /**
     * Get C33 value
     *
     * @return float|null
     */
    public function getC33()
    {
        return $this->C33;
    }
    /**
     * Set C33 value
     *
     * @param float $_c33 the C33
     *
     * @return float
     */
    public function setC33($_c33)
    {
        return ($this->C33 = $_c33);
    }
    /**
     * Get C30 value
     *
     * @return float|null
     */
    public function getC30()
    {
        return $this->C30;
    }
    /**
     * Set C30 value
     *
     * @param float $_c30 the C30
     *
     * @return float
     */
    public function setC30($_c30)
    {
        return ($this->C30 = $_c30);
    }
    /**
     * Get C21 value
     *
     * @return float|null
     */
    public function getC21()
    {
        return $this->C21;
    }
    /**
     * Set C21 value
     *
     * @param float $_c21 the C21
     *
     * @return float
     */
    public function setC21($_c21)
    {
        return ($this->C21 = $_c21);
    }
    /**
     * Get C22 value
     *
     * @return float|null
     */
    public function getC22()
    {
        return $this->C22;
    }
    /**
     * Set C22 value
     *
     * @param float $_c22 the C22
     *
     * @return float
     */
    public function setC22($_c22)
    {
        return ($this->C22 = $_c22);
    }
    /**
     * Get C23 value
     *
     * @return float|null
     */
    public function getC23()
    {
        return $this->C23;
    }
    /**
     * Set C23 value
     *
     * @param float $_c23 the C23
     *
     * @return float
     */
    public function setC23($_c23)
    {
        return ($this->C23 = $_c23);
    }
    /**
     * Get C24 value
     *
     * @return float|null
     */
    public function getC24()
    {
        return $this->C24;
    }
    /**
     * Set C24 value
     *
     * @param float $_c24 the C24
     *
     * @return float
     */
    public function setC24($_c24)
    {
        return ($this->C24 = $_c24);
    }
    /**
     * Get C42 value
     *
     * @return float|null
     */
    public function getC42()
    {
        return $this->C42;
    }
    /**
     * Set C42 value
     *
     * @param float $_c42 the C42
     *
     * @return float
     */
    public function setC42($_c42)
    {
        return ($this->C42 = $_c42);
    }
    /**
     * Get C43 value
     *
     * @return float|null
     */
    public function getC43()
    {
        return $this->C43;
    }
    /**
     * Set C43 value
     *
     * @param float $_c43 the C43
     *
     * @return float
     */
    public function setC43($_c43)
    {
        return ($this->C43 = $_c43);
    }
    /**
     * Get C40 value
     *
     * @return float|null
     */
    public function getC40()
    {
        return $this->C40;
    }
    /**
     * Set C40 value
     *
     * @param float $_c40 the C40
     *
     * @return float
     */
    public function setC40($_c40)
    {
        return ($this->C40 = $_c40);
    }
    /**
     * Get C50 value
     *
     * @return float|null
     */
    public function getC50()
    {
        return $this->C50;
    }
    /**
     * Set C50 value
     *
     * @param float $_c50 the C50
     *
     * @return float
     */
    public function setC50($_c50)
    {
        return ($this->C50 = $_c50);
    }
    /**
     * Get C60 value
     *
     * @return float|null
     */
    public function getC60()
    {
        return $this->C60;
    }
    /**
     * Set C60 value
     *
     * @param float $_c60 the C60
     *
     * @return float
     */
    public function setC60($_c60)
    {
        return ($this->C60 = $_c60);
    }
    /**
     * Get C70 value
     *
     * @return float|null
     */
    public function getC70()
    {
        return $this->C70;
    }
    /**
     * Set C70 value
     *
     * @param float $_c70 the C70
     *
     * @return float
     */
    public function setC70($_c70)
    {
        return ($this->C70 = $_c70);
    }
    /**
     * Get C71 value
     *
     * @return float|null
     */
    public function getC71()
    {
        return $this->C71;
    }
    /**
     * Set C71 value
     *
     * @param float $_c71 the C71
     *
     * @return float
     */
    public function setC71($_c71)
    {
        return ($this->C71 = $_c71);
    }
    /**
     * Get C72 value
     *
     * @return float|null
     */
    public function getC72()
    {
        return $this->C72;
    }
    /**
     * Set C72 value
     *
     * @param float $_c72 the C72
     *
     * @return float
     */
    public function setC72($_c72)
    {
        return ($this->C72 = $_c72);
    }
    /**
     * Get C72Date value
     *
     * @return float|null
     */
    public function getC72Date()
    {
        return $this->C72Date;
    }
    /**
     * Set C72Date value
     *
     * @param float $_c72Date the C72Date
     *
     * @return float
     */
    public function setC72Date($_c72Date)
    {
        return ($this->C72Date = $_c72Date);
    }
    /**
     * Get C80 value
     *
     * @return float|null
     */
    public function getC80()
    {
        return $this->C80;
    }
    /**
     * Set C80 value
     *
     * @param float $_c80 the C80
     *
     * @return float
     */
    public function setC80($_c80)
    {
        return ($this->C80 = $_c80);
    }
    /**
     * Get C81 value
     *
     * @return float|null
     */
    public function getC81()
    {
        return $this->C81;
    }
    /**
     * Set C81 value
     *
     * @param float $_c81 the C81
     *
     * @return float
     */
    public function setC81($_c81)
    {
        return ($this->C81 = $_c81);
    }
    /**
     * Get C82 value
     *
     * @return float|null
     */
    public function getC82()
    {
        return $this->C82;
    }
    /**
     * Set C82 value
     *
     * @param float $_c82 the C82
     *
     * @return float
     */
    public function setC82($_c82)
    {
        return ($this->C82 = $_c82);
    }
    /**
     * Get Is77a2 value
     *
     * @return float|null
     */
    public function getIs77a2()
    {
        return $this->Is77a2;
    }
    /**
     * Set Is77a2 value
     *
     * @param float $_is77a2 the Is77a2
     *
     * @return float
     */
    public function setIs77a2($_is77a2)
    {
        return ($this->Is77a2 = $_is77a2);
    }
    /**
     * Get OOLastX value
     *
     * @return float|null
     */
    public function getOOLastX()
    {
        return $this->OOLastX;
    }
    /**
     * Set OOLastX value
     *
     * @param float $_oOLastX the OOLastX
     *
     * @return float
     */
    public function setOOLastX($_oOLastX)
    {
        return ($this->OOLastX = $_oOLastX);
    }
    /**
     * Get ExpLastX value
     *
     * @return float|null
     */
    public function getExpLastX()
    {
        return $this->ExpLastX;
    }
    /**
     * Set ExpLastX value
     *
     * @param float $_expLastX the ExpLastX
     *
     * @return float
     */
    public function setExpLastX($_expLastX)
    {
        return ($this->ExpLastX = $_expLastX);
    }
    /**
     * Get ExportDate value
     *
     * @return string|null
     */
    public function getExportDate()
    {
        return $this->ExportDate;
    }
    /**
     * Set ExportDate value
     *
     * @param string $_exportDate the ExportDate
     *
     * @return string
     */
    public function setExportDate($_exportDate)
    {
        return ($this->ExportDate = $_exportDate);
    }
    /**
     * Get ExportAuthPerson value
     *
     * @return string|null
     */
    public function getExportAuthPerson()
    {
        return $this->ExportAuthPerson;
    }
    /**
     * Set ExportAuthPerson value
     *
     * @param string $_exportAuthPerson the ExportAuthPerson
     *
     * @return string
     */
    public function setExportAuthPerson($_exportAuthPerson)
    {
        return ($this->ExportAuthPerson = $_exportAuthPerson);
    }
    /**
     * Get ExportPhone value
     *
     * @return string|null
     */
    public function getExportPhone()
    {
        return $this->ExportPhone;
    }
    /**
     * Set ExportPhone value
     *
     * @param string $_exportPhone the ExportPhone
     *
     * @return string
     */
    public function setExportPhone($_exportPhone)
    {
        return ($this->ExportPhone = $_exportPhone);
    }
    /**
     * Get ExportLastRegDate value
     *
     * @return string|null
     */
    public function getExportLastRegDate()
    {
        return $this->ExportLastRegDate;
    }
    /**
     * Set ExportLastRegDate value
     *
     * @param string $_exportLastRegDate the ExportLastRegDate
     *
     * @return string
     */
    public function setExportLastRegDate($_exportLastRegDate)
    {
        return ($this->ExportLastRegDate = $_exportLastRegDate);
    }
    /**
     * Get ExportLastUnRegDate value
     *
     * @return string|null
     */
    public function getExportLastUnRegDate()
    {
        return $this->ExportLastUnRegDate;
    }
    /**
     * Set ExportLastUnRegDate value
     *
     * @param string $_exportLastUnRegDate the ExportLastUnRegDate
     *
     * @return string
     */
    public function setExportLastUnRegDate($_exportLastUnRegDate)
    {
        return ($this->ExportLastUnRegDate = $_exportLastUnRegDate);
    }
    /**
     * Get ExportBranch value
     *
     * @return string|null
     */
    public function getExportBranch()
    {
        return $this->ExportBranch;
    }
    /**
     * Set ExportBranch value
     *
     * @param string $_exportBranch the ExportBranch
     *
     * @return string
     */
    public function setExportBranch($_exportBranch)
    {
        return ($this->ExportBranch = $_exportBranch);
    }
    /**
     * Get APP value
     *
     * @return array|null
     */
    public function getAPP()
    {
        return $this->APP;
    }
    /**
     * Set APP value
     *
     * @param array $_aPP the APP
     *
     * @return array
     */
    public function setAPP($_aPP)
    {
        return ($this->APP = $_aPP);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see   ColibriERPWsdlClass::__set_state()
     * @uses  ColibriERPWsdlClass::__set_state()
     * @param array  $_array     the exported values
     * @param string $_className expect string
     *
     * @return ColibriERPStructVATDeclarationDef
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array, $_className);
    }
    /**
     * Method returning the class name
     *
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
