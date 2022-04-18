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
			['category_id' => 1, 'language_id' => 1, 'name' => 'Du Học'],
			['category_id' => 1, 'language_id' => 2, 'name' => 'Study Abroad'],

			['category_id' => 2, 'language_id' => 1, 'name' => 'Du Học Canada'],
			['category_id' => 3, 'language_id' => 1, 'name' => 'Du Học Anh'],
			['category_id' => 4, 'language_id' => 1, 'name' => 'Du Học Mỹ'],
			['category_id' => 5, 'language_id' => 1, 'name' => 'Du Học Úc'],
			['category_id' => 6, 'language_id' => 1, 'name' => 'Du Học New Zealand'],
			['category_id' => 7, 'language_id' => 1, 'name' => 'Du Học Singapore'],
			['category_id' => 8, 'language_id' => 1, 'name' => 'Du Học Phần Lan'],
			['category_id' => 9, 'language_id' => 1, 'name' => 'Du Học Hà Lan'],
			['category_id' => 10, 'language_id' => 1, 'name' => 'Du Học Thụy Sĩ'],
			['category_id' => 11, 'language_id' => 1, 'name' => 'Du Học Malaysia'],
			['category_id' => 12, 'language_id' => 1, 'name' => 'Du Học Thái Lan'],
			['category_id' => 13, 'language_id' => 1, 'name' => 'Du Học Đài Loan'],
			['category_id' => 14, 'language_id' => 1, 'name' => 'Du Học Philippines'],

			['category_id' => 15, 'language_id' => 1, 'name' => 'Các Trường Đại Học & Cao Đẳng Canada'],
			['category_id' => 16, 'language_id' => 1, 'name' => 'Trung Học Canada'],
			['category_id' => 17, 'language_id' => 1, 'name' => 'Visa Canada'],
			['category_id' => 18, 'language_id' => 1, 'name' => 'Thông Tin Nước Canada'],

			['category_id' => 19, 'language_id' => 1, 'name' => 'Hệ Thống Các Trường Anh Quốc'],
			['category_id' => 20, 'language_id' => 1, 'name' => 'Visa Anh', 'slug' => 'visa-anh'],
			['category_id' => 21, 'language_id' => 1, 'name' => 'Thông Tin Nước Anh'],

			['category_id' => 22, 'language_id' => 1, 'name' => 'Các Trường Đại Học & Cao Đẳng Mỹ'],
			['category_id' => 23, 'language_id' => 1, 'name' => 'Trung Học Mỹ'],
			['category_id' => 24, 'language_id' => 1, 'name' => 'Visa Mỹ'],
			['category_id' => 25, 'language_id' => 1, 'name' => 'Thông Tin Nước Mỹ'],

			['category_id' => 26, 'language_id' => 1, 'name' => 'Các Trường Đại Học & Cao Đẳng Úc'],
			['category_id' => 27, 'language_id' => 1, 'name' => 'Trung Học Úc'],
			['category_id' => 28, 'language_id' => 1, 'name' => 'Visa Úc'],
			['category_id' => 29, 'language_id' => 1, 'name' => 'Thông Tin Nước Úc'],

			['category_id' => 30, 'language_id' => 1, 'name' => 'Các Trường Đại Học & Cao Đẳng New ZeaLand'],
			['category_id' => 31, 'language_id' => 1, 'name' => 'Visa New Zealand'],
			['category_id' => 32, 'language_id' => 1, 'name' => 'Thông Tin Nước New  Zealand'],

			['category_id' => 33, 'language_id' => 1, 'name' => 'Hệ Thống Các Trường Singapore'],
			['category_id' => 34, 'language_id' => 1, 'name' => 'Thông Tin Nước Singapore'],

			['category_id' => 35, 'language_id' => 1, 'name' => 'Hệ Thống Các Trường Phần Lan'],
			['category_id' => 36, 'language_id' => 1, 'name' => 'Visa Phần Lan', 'slug' => 'visa-phan-lan'],
			['category_id' => 37, 'language_id' => 1, 'name' => 'Thông Tin Nước Phần Lan'],

			['category_id' => 38, 'language_id' => 1, 'name' => 'Hệ Thống Các Trường Hà Lan'],
			['category_id' => 39, 'language_id' => 1, 'name' => 'Visa Hà Lan'],
			['category_id' => 40, 'language_id' => 1, 'name' => 'Thông Tin Nước Hà Làn'],

			['category_id' => 41, 'language_id' => 1, 'name' => 'Hệ Thống Các Trường Thụy Sĩ'],
			['category_id' => 42, 'language_id' => 1, 'name' => 'Visa Thụy Sĩ'],
			['category_id' => 43, 'language_id' => 1, 'name' => 'Thông Tin Nước Thụy Sĩ'],

			['category_id' => 44, 'language_id' => 1, 'name' => 'Hệ Thống Các Trường Malaysia'],
			['category_id' => 45, 'language_id' => 1, 'name' => 'Thông Tin Nước Malaysia'],

			['category_id' => 46, 'language_id' => 1, 'name' => 'Hệ Thống Các Trường Thái Lan'],
			['category_id' => 47, 'language_id' => 1, 'name' => 'Thông Tin Nước Thái Lan'],

			['category_id' => 48, 'language_id' => 1, 'name' => 'Hệ Thống Các Trường Đài Loan'],
			['category_id' => 49, 'language_id' => 1, 'name' => 'Visa Đài Loan'],
			['category_id' => 50, 'language_id' => 1, 'name' => 'Thông Tin Nước Đài Loan'],

			['category_id' => 51, 'language_id' => 1, 'name' => 'Hệ Thống Các Trường Philippines'],
			['category_id' => 52, 'language_id' => 1, 'name' => 'Thông Tin Nước Philippines'],

			['category_id' => 53, 'language_id' => 1, 'name' => 'Định Cư'],
			['category_id' => 54, 'language_id' => 1, 'name' => 'Định Cư Mỹ'],
			['category_id' => 55, 'language_id' => 1, 'name' => 'Định Cư Úc'],
			['category_id' => 56, 'language_id' => 1, 'name' => 'Định Cư Canada'],

			['category_id' => 57, 'language_id' => 1, 'name' => 'Học Bổng Du Học'],
			['category_id' => 58, 'language_id' => 1, 'name' => 'Học Bổng Canada'],
			['category_id' => 59, 'language_id' => 1, 'name' => 'Học Bổng Anh'],
			['category_id' => 60, 'language_id' => 1, 'name' => 'Học Bổng Mỹ'],
			['category_id' => 61, 'language_id' => 1, 'name' => 'Học Bổng Úc'],
			['category_id' => 62, 'language_id' => 1, 'name' => 'Học Bổng New Zealand'],
			['category_id' => 63, 'language_id' => 1, 'name' => 'Học Bổng Singapore'],
			['category_id' => 64, 'language_id' => 1, 'name' => 'Học Bổng Phần Lan'],
			['category_id' => 65, 'language_id' => 1, 'name' => 'Học Bổng Hà Lan'],
			['category_id' => 66, 'language_id' => 1, 'name' => 'Học Bổng Thụy Sĩ'],

			['category_id' => 67, 'language_id' => 1, 'name' => 'Chương Trình Đào Tạo'],
			['category_id' => 68, 'language_id' => 1, 'name' => 'Luyện Thi Tiếng Anh'],
			['category_id' => 69, 'language_id' => 1, 'name' => 'Luyện IELTS Du Học'],
			['category_id' => 70, 'language_id' => 1, 'name' => 'Luyện Anh Văn Phỏng Vấn Xin Visa Mỹ'],
			['category_id' => 71, 'language_id' => 1, 'name' => 'Dạy Anh Văn Du Lịch'],
			['category_id' => 72, 'language_id' => 1, 'name' => 'Dạy Anh Văn Cho Người Sắp Định Cư'],
			['category_id' => 73, 'language_id' => 1, 'name' => 'Huấn Luyện Sinh Viên Thực Tập'],
			['category_id' => 74, 'language_id' => 1, 'name' => 'Huấn Luyện Nhân Sự'],

			['category_id' => 75, 'language_id' => 1, 'name' => 'Tin Tức']
		];

		foreach ($categoryTranslations as $categoryTranslation) {
			CategoryTranslation::create($categoryTranslation);
		}
	}
}
