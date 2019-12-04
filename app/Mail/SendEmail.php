<?php
namespace App\Mail;
    use Illuminate\Bus\Queueable;
    use Illuminate\Mail\Mailable;
    use Illuminate\Queue\SerializesModels;
    use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;


    public $namee;
    public $phone;
    public $addres;
    public $caption;
    public $content;
    public function __construct($name,$dienthoai,$txtdiachi,$txttieude,$txtnoidung)
    {
        $this->namee = $name;
        $this->phone = $dienthoai;
        $this->addres = $txtdiachi;
        $this->caption = $txttieude;
        $this->content = $txtnoidung;
    }

    public function build()
    {
        $e_name = $this->namee;
        $e_phone = $this->phone;
        $e_addres = $this->addres;
        $e_caption = $this->caption;
        $e_content = $this->content;
        return $this->view('modules.sub-modules.lien-he-gop-y',compact("e_content"))->subject($e_content);
    }
}