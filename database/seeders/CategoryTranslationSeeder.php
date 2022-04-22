<?php

namespace Database\Seeders;

use App\Models\CategoryTranslation;
use Illuminate\Database\Seeder;

class CategoryTranslationSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return vocategory_id
	 */
	public function run()
	{
		$categoryTranslations = [
			['category_id' => 1, 'language_id' => 1, 'name' => 'Du Học', 'slug' => 'du-hoc'],
			['category_id' => 1, 'language_id' => 2, 'name' => 'Study Abroad', 'slug' => 'study-aborad'],

			['category_id' => 2, 'language_id' => 1, 'name' => 'Du Học Canada', 'slug' => 'du-hoc-canada'],
			['category_id' => 3, 'language_id' => 1, 'name' => 'Du Học Anh', 'slug' => 'du-hoc-anh'],
			['category_id' => 4, 'language_id' => 1, 'name' => 'Du Học Mỹ', 'slug' => 'du-hoc-my'],
			['category_id' => 5, 'language_id' => 1, 'name' => 'Du Học Úc', 'slug' => 'du-hoc-uc'],
			['category_id' => 6, 'language_id' => 1, 'name' => 'Du Học New Zealand', 'slug' => 'du-hoc-new-zealand'],
			['category_id' => 7, 'language_id' => 1, 'name' => 'Du Học Singapore', 'slug' => 'du-hoc-singapore'],
			['category_id' => 8, 'language_id' => 1, 'name' => 'Du Học Phần Lan', 'slug' => 'du-hoc-phan-lan'],
			['category_id' => 9, 'language_id' => 1, 'name' => 'Du Học Hà Lan', 'slug' => 'du-hoc-ha-lan'],
			['category_id' => 10, 'language_id' => 1, 'name' => 'Du Học Thụy Sĩ', 'slug' => 'du-hoc-thuy-si'],
			['category_id' => 11, 'language_id' => 1, 'name' => 'Du Học Malaysia', 'slug' => 'du-hoc-malaysia'],
			['category_id' => 12, 'language_id' => 1, 'name' => 'Du Học Thái Lan', 'slug' => 'du-hoc-thai-lan'],
			['category_id' => 13, 'language_id' => 1, 'name' => 'Du Học Đài Loan', 'slug' => 'du-hoc-dai-loan'],
			['category_id' => 14, 'language_id' => 1, 'name' => 'Du Học Philippines', 'slug' => 'du-hoc-philippines'],

			['category_id' => 15, 'language_id' => 1, 'name' => 'Các Trường Đại Học & Cao Đẳng Canada', 'slug' => 'cac-truong-dai-hoc-va-cao-dang-canada'],
			['category_id' => 16, 'language_id' => 1, 'name' => 'Trung Học Canada', 'slug' => 'trung-hoc-canada'],
			['category_id' => 17, 'language_id' => 1, 'name' => 'Visa Canada', 'slug' => 'visa-canada'],
			['category_id' => 18, 'language_id' => 1, 'name' => 'Thông Tin Nước Canada', 'slug' => 'thong-tin-nuoc-canada'],

			['category_id' => 19, 'language_id' => 1, 'name' => 'Hệ Thống Các Trường Anh Quốc', 'slug' => 'he-thong-cac-truong-anh-quoc'],
			['category_id' => 20, 'language_id' => 1, 'name' => 'Visa Anh', 'slug' => 'visa-anh'],
			['category_id' => 21, 'language_id' => 1, 'name' => 'Thông Tin Nước Anh', 'slug' => 'thong-tin-nuoc-anh'],

			['category_id' => 22, 'language_id' => 1, 'name' => 'Các Trường Đại Học & Cao Đẳng Mỹ', 'slug' => 'cac-truong-dai-hoc-va-cao-dang-my'],
			['category_id' => 23, 'language_id' => 1, 'name' => 'Trung Học Mỹ', 'slug' => 'trung-hoc-my'],
			['category_id' => 24, 'language_id' => 1, 'name' => 'Visa Mỹ', 'slug' => 'visa-my'],
			['category_id' => 25, 'language_id' => 1, 'name' => 'Thông Tin Nước Mỹ', 'slug' => 'thong-tin-nuoc-my'],

			['category_id' => 26, 'language_id' => 1, 'name' => 'Các Trường Đại Học & Cao Đẳng Úc', 'slug' => 'cac-truong-dai-hoc-va-cao-dang-uc'],
			['category_id' => 27, 'language_id' => 1, 'name' => 'Trung Học Úc', 'slug' => 'trung-hoc-uc'],
			['category_id' => 28, 'language_id' => 1, 'name' => 'Visa Úc', 'slug' => 'visa-uc'],
			['category_id' => 29, 'language_id' => 1, 'name' => 'Thông Tin Nước Úc', 'slug' => 'thong-tin-nuoc-uc'],

			['category_id' => 30, 'language_id' => 1, 'name' => 'Các Trường Đại Học & Cao Đẳng New ZeaLand', 'slug' => 'cac-truong-dai-hoc-va-cao-dang-new-zealand'],
			['category_id' => 31, 'language_id' => 1, 'name' => 'Visa New Zealand', 'slug' => 'visa-new-zealand'],
			['category_id' => 32, 'language_id' => 1, 'name' => 'Thông Tin Nước New  Zealand', 'slug' => 'thong-tin-nuoc-new-zealand'],

			['category_id' => 33, 'language_id' => 1, 'name' => 'Hệ Thống Các Trường Singapore', 'slug' => 'he-thong-cac-truong-singapore'],
			['category_id' => 34, 'language_id' => 1, 'name' => 'Thông Tin Nước Singapore', 'slug' => 'thong-tin-nuoc-singapore'],

			['category_id' => 35, 'language_id' => 1, 'name' => 'Hệ Thống Các Trường Phần Lan', 'slug' => 'he-thong-cac-truong-phan-lan'],
			['category_id' => 36, 'language_id' => 1, 'name' => 'Visa Phần Lan', 'slug' => 'visa-phan-lan'],
			['category_id' => 37, 'language_id' => 1, 'name' => 'Thông Tin Nước Phần Lan', 'slug' => 'thong-tin-nuoc-phan-lan'],

			['category_id' => 38, 'language_id' => 1, 'name' => 'Hệ Thống Các Trường Hà Lan', 'slug' => 'he-thong-cac-truong-ha-lan'],
			['category_id' => 39, 'language_id' => 1, 'name' => 'Visa Hà Lan', 'slug' => 'visa-ha-lan'],
			['category_id' => 40, 'language_id' => 1, 'name' => 'Thông Tin Nước Hà Làn', 'slug' => 'thong-tin-nuoc-ha-lan'],

			['category_id' => 41, 'language_id' => 1, 'name' => 'Hệ Thống Các Trường Thụy Sĩ', 'slug' => 'he-thong-cac-truong-thuy-si'],
			['category_id' => 42, 'language_id' => 1, 'name' => 'Visa Thụy Sĩ', 'slug' => 'visa-thuy-si'],
			['category_id' => 43, 'language_id' => 1, 'name' => 'Thông Tin Nước Thụy Sĩ', 'slug' => 'thong-tin-nuoc-thuy-si'],

			['category_id' => 44, 'language_id' => 1, 'name' => 'Hệ Thống Các Trường Malaysia', 'slug' => 'he-thong-cac-truong-malaysia'],
			['category_id' => 45, 'language_id' => 1, 'name' => 'Thông Tin Nước Malaysia', 'slug' => 'thong-tin-nuoc-malaysia'],

			['category_id' => 46, 'language_id' => 1, 'name' => 'Hệ Thống Các Trường Thái Lan', 'slug' => 'he-thong-cac-truong-thai-lan'],
			['category_id' => 47, 'language_id' => 1, 'name' => 'Thông Tin Nước Thái Lan', 'slug' => 'thong-tin-nuoc-thai-lan'],

			['category_id' => 48, 'language_id' => 1, 'name' => 'Hệ Thống Các Trường Đài Loan', 'slug' => 'cac-truong-dai-loan'],
			['category_id' => 49, 'language_id' => 1, 'name' => 'Visa Đài Loan', 'slug' => 'visa-dai-loan'],
			['category_id' => 50, 'language_id' => 1, 'name' => 'Thông Tin Nước Đài Loan', 'slug' => 'thong-tin-nuoc-dai-loan'],

			['category_id' => 51, 'language_id' => 1, 'name' => 'Hệ Thống Các Trường Philippines', 'slug' => 'he-thong-cac-truong-philippines'],
			['category_id' => 52, 'language_id' => 1, 'name' => 'Thông Tin Nước Philippines', 'slug' => 'thong-tin-nuoc-philippines'],

			['category_id' => 53, 'language_id' => 1, 'name' => 'Định Cư', 'slug' => 'dinh-cu'],
			['category_id' => 54, 'language_id' => 1, 'name' => 'Định Cư Mỹ', 'slug' => 'dinh-cu-my'],
			['category_id' => 55, 'language_id' => 1, 'name' => 'EB-5', 'slug' => 'eb-5'],
			['category_id' => 56, 'language_id' => 1, 'name' => 'L1', 'slug' => 'l-1'],
			['category_id' => 57, 'language_id' => 1, 'name' => 'Bảo Lãnh Nhân Thân', 'slug' => 'bao-lanh-nhan-than'],
			['category_id' => 58, 'language_id' => 1, 'name' => 'Dịch Vụ An Cư', 'slug' => 'dinh-vu-an-cu'],
			['category_id' => 59, 'language_id' => 1, 'name' => 'Dự Án EB-5', 'slug' => 'du-an-eb-5'],
			['category_id' => 60, 'language_id' => 1, 'name' => 'Tìm Hiểu Về Nước Mỹ', 'slug' => 'tim-hieu-ve-nuoc-my'],

			['category_id' => 61, 'language_id' => 1, 'name' => 'Định Cư Úc', 'slug' => 'dinh-cu-uc'],
			['category_id' => 62, 'language_id' => 1, 'name' => 'Chương Trình 132A', 'slug' => 'chuong-trinh-132a'],
			['category_id' => 63, 'language_id' => 1, 'name' => 'Chương Trình 132B', 'slug' => 'chuong-trinh-132b'],
			['category_id' => 64, 'language_id' => 1, 'name' => 'Chương Trình 188A', 'slug' => 'chuong-trinh-188a'],
			['category_id' => 65, 'language_id' => 1, 'name' => 'Chương Trình 188B', 'slug' => 'chuong-trinh-188b'],
			['category_id' => 66, 'language_id' => 1, 'name' => 'Chương Trình 188C', 'slug' => 'chuong-trinh-188c'],
			['category_id' => 67, 'language_id' => 1, 'name' => 'Tìm Hiểu Về Nước Úc', 'slug' => 'tim-hieu-ve-nuoc-uc'],

			['category_id' => 68, 'language_id' => 1, 'name' => 'Định Cư Canada', 'slug' => 'dinh-cu-canada'],
			['category_id' => 69, 'language_id' => 1, 'name' => 'Định Cư Brunswick', 'slug' => 'dinh-cu-brunswick'],
			['category_id' => 70, 'language_id' => 1, 'name' => 'Dự Án British Columbia', 'slug' => 'du-an-british-columbia'],
			['category_id' => 71, 'language_id' => 1, 'name' => 'Tìm Hiểu Về Canada', 'slug' => 'tim-hieu-ve-canada'],

			['category_id' => 72, 'language_id' => 1, 'name' => 'Học Bổng', 'slug' => 'hoc-bong-du-hoc'],
			['category_id' => 73, 'language_id' => 1, 'name' => 'Học Bổng Canada', 'slug' => 'hong-bong-canada'],
			['category_id' => 74, 'language_id' => 1, 'name' => 'Học Bổng Anh', 'slug' => 'hoc-bong-anh'],
			['category_id' => 75, 'language_id' => 1, 'name' => 'Học Bổng Mỹ', 'slug' => 'hoc-bong-my'],
			['category_id' => 76, 'language_id' => 1, 'name' => 'Học Bổng Úc', 'slug' => 'hoc-bong-uc'],
			['category_id' => 77, 'language_id' => 1, 'name' => 'Học Bổng New Zealand', 'slug' => 'hoc-bong-zealand'],
			['category_id' => 78, 'language_id' => 1, 'name' => 'Học Bổng Singapore', 'slug' => 'hoc-bong-singapore'],
			['category_id' => 79, 'language_id' => 1, 'name' => 'Học Bổng Phần Lan', 'slug' => 'hoc-bong-phan-lan'],
			['category_id' => 80, 'language_id' => 1, 'name' => 'Học Bổng Hà Lan', 'slug' => 'hoc-bong-ha-lan'],
			['category_id' => 81, 'language_id' => 1, 'name' => 'Học Bổng Thụy Sĩ', 'slug' => 'hoc-bong-thuy-si'],

			['category_id' => 82, 'language_id' => 1, 'name' => 'Đào Tạo', 'slug' => 'chuong-trinh-dao-tao'],
			['category_id' => 83, 'language_id' => 1, 'name' => 'Luyện Thi Tiếng Anh', 'slug' => 'luyen-thi-tieng-anh'],
			['category_id' => 84, 'language_id' => 1, 'name' => 'Luyện IELTS Du Học', 'slug' => 'luyen-ielts-du-hoc'],
			['category_id' => 85, 'language_id' => 1, 'name' => 'Luyện Anh Văn Phỏng Vấn Xin Visa Mỹ', 'slug' => 'luyen-anh-van-phong-van-xin-visa-my'],
			['category_id' => 86, 'language_id' => 1, 'name' => 'Dạy Anh Văn Du Lịch', 'slug' => 'day-anh-van-du-lich'],
			['category_id' => 87, 'language_id' => 1, 'name' => 'Dạy Anh Văn Cho Người Sắp Định Cư', 'slug' => 'day-anh-van-cho-nguoi-sap-dinh-cu'],
			['category_id' => 88, 'language_id' => 1, 'name' => 'Huấn Luyện Sinh Viên Thực Tập', 'slug' => 'huan-luyen-sinh-vien-thuc-tap'],
			['category_id' => 89, 'language_id' => 1, 'name' => 'Huấn Luyện Nhân Sự', 'slug' => 'huan-luyen-nhan-su'],

			['category_id' => 90, 'language_id' => 1, 'name' => 'Dịch Vụ', 'slug' => 'dich-vu'],
			['category_id' => 91, 'language_id' => 1, 'name' => 'Khách Hàng', 'slug' => 'khach-hang'],
			['category_id' => 92, 'language_id' => 1, 'name' => 'Đối Tác', 'slug' => 'doi-tac'],
			['category_id' => 93, 'language_id' => 1, 'name' => 'Tuyển Dụng', 'slug' => 'tuyen-dung'],
			['category_id' => 94, 'language_id' => 1, 'name' => 'Tin Tức', 'slug' => 'tin-tuc'],

			['category_id' => 95, 'language_id' => 1, 'name' => 'Đối Tác Nước Mỹ', 'slug' => 'doi-tac-nuoc-my'],
			['category_id' => 96, 'language_id' => 1, 'name' => 'Đối Tác Nước Canada', 'slug' => 'doi-tac-nuoc-canada'],
			['category_id' => 97, 'language_id' => 1, 'name' => 'Đối Tác Nước Singapore', 'slug' => 'doi-tac-nuoc-singapore'],
		];

		foreach ($categoryTranslations as $categoryTranslation) {
			CategoryTranslation::create($categoryTranslation);
		}
	}
}
