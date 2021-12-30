<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Institution;
use App\Models\Personal;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\SimpleType\JcTable;

class DocxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function generateDocx(){

        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $properties = $phpWord->getDocInfo();
        $properties->setCreator('Paul');
        $properties->setCompany('Orange Juice Factory');
        $properties->setTitle('Purchase invoice');
        $phpWord->setDefaultFontName('Times New Roman');
        $title = array('name'=> 'Times New Roman','size' => 14, 'bold' => true, 'align'=>'center','header'=>true);
        $subtitle = array('name'=> 'Times New Roman', 'size' => 12, 'bold' => true, 'align'=>'center',    'space' => array('line' => 190, 'rule' => 'exact'), 'color' => '85837f');
        $subtitleSecondary = array('name'=> 'Times New Roman', 'size' => 11, 'bold' => true, 'align'=>'center', 'color' => '85837f');
        $heading = array('size' => 14, 'bold' => false, 'color' => '65676B');
        $fullLineHorizontalRule = array('weight' => 0, 'width' => 450, 'height' => 0);
        $customerTableStyle = array('cellMargin' => 80, 'alignment' => JcTable::START);
        $itemsTableStyle =array('name'=> 'Times New Roman','borderSize' => 4, 'borderColor' => '85837f', 'cellMargin' => 60,'align'=>'center','alignment' => JcTable::START);
        //start building document
        $section = $phpWord->addSection();
        $phpWord->addTitleStyle(1, array('size' => 13, 'color' => '333333', 'bold' => true, 'align'=> 'center'));
        $itemsTableHeading = 'Items';
        $phpWord->addTableStyle($itemsTableHeading, $itemsTableStyle);
        // $section->addText('Items', $heading);


        $institutions = Institution::orderBy('title')->get();

        foreach ($institutions as $institution)
        {
            // $section->addText($institution['title'], $title, 'pStyleCenter');
            $section->addTitle($institution['title'], 1);
            $section->addText("Адреса: ".$institution['adress'], null, $subtitle, 'pStyleCenter');
            $section->addText("код ЭДРПОУ: ".$institution['edrpou'], null, $subtitle, 'pStyleCenter');
            $section->addText("Email: ".$institution['email'], null, $subtitleSecondary, 'pStyleCenter');
            //$section->addTextBreak(1);
            //  $section->addLine($fullLineHorizontalRule);
            // $section->addTextBreak(1);

            $table = $section->addTable($itemsTableHeading);
            $table->addRow();
            $table->addCell()->addText('Посада', array('bold' => true));
            $table->addCell()->addText('ПІБ', array('bold' => true));
            $table->addCell()->addText('Номер телефону', array('bold' => true));

            $results = Personal::with('position','institution')->where('inst_id',$institution['id'])->get();

            foreach ($results as $result)
            {
                $table->addRow();
                $table->addCell()->addText($result->position['title']);
                $table->addCell()->addText($result['surname']." ".$result['name']." ".$result['lastname']);
                $table->addCell()->addText($result['work_phone']);
            }


            $section->addTextBreak(1);

        }
        $footer = $section->addFooter();
        $footer->addPreserveText('Сторінка {PAGE} of {NUMPAGES}.', null, array('alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER));
        //$footer->addLink('<https://paulreaney.medium.com/>', 'PHPWord demo');
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        try {
            $objWriter->save(storage_path('Довідник.docx'));
        } catch (Exception $e) {
        }


        return response()->download(storage_path('Довідник.docx'));
        //  $writer->save($pathToFile);
    }
}
