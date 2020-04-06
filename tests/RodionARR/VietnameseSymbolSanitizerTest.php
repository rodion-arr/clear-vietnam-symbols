<?php
namespace Tests\RodionARR;

use PHPUnit\Framework\TestCase;
use RodionARR\VietnameseSymbolSanitizer;

class VietnameseSymbolSanitizerTest extends TestCase
{
    private $sut;

    protected function setUp(): void
    {
        $this->sut = new VietnameseSymbolSanitizer();
    }

    /**
     * @dataProvider sanitizeDataProvide
     * @param $input
     * @param $expected
     */
    public function test_run_should_clean_symbols($input, $expected)
    {
        $this->assertEquals($expected, $this->sut->run($input));
    }

    public function sanitizeDataProvide()
    {
        return [
            ['#1 vay tiền nhanh trong ngày', '1 vay tien nhanh trong ngay'],
            ['05 lý do bạn nên chọn Cashwagon để được hỗ trợ tài chính', '05 ly do ban nen chon cashwagon de duoc ho tro tai chinh'],
            ['1 bộ hồ sơ tín dụng gồm những gì', '1 bo ho so tin dung gom nhung gi'],
            ['1 fast vay tiền', '1 fast vay tien'],
            ['1 ngân hàng đề thi gồm 20 câu hỏi', '1 ngan hang de thi gom 20 cau hoi'],
            ['1 người làm được bao nhiêu thẻ tín dụng', '1 nguoi lam duoc bao nhieu the tin dung'],
            ['1 người được làm mấy thẻ tín dụng', '1 nguoi duoc lam may the tin dung'],
            ['ngân hàng vietcombank', 'ngan hang vietcombank'],
            ['ngân hàng vietinbank 79a hàm nghi', 'ngan hang vietinbank 79a ham nghi'],
        ];
    }
}
