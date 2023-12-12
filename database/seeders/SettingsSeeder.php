<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            "key" => "site_title_tr",
            "value" => "Site İsmi TR",
        ]);

        Setting::create([
            "key" => "site_title_en",
            "value" => "Site İsmi EN",
        ]);

        Setting::create([
            "key" => "telefon",
            "value" => "0 222 222 2222",
        ]);

        Setting::create([
            "key" => "acik_adres",
            "value" => "İstanbul",
        ]);

        Setting::create([
            "key" => "twitter",
            "value" => "https://twitter.com/",
        ]);

        Setting::create([
            "key" => "youtube",
            "value" => "https://www.youtube.com/",
        ]);

        Setting::create([
            "key" => "linkedin",
            "value" => "https://www.linkedin.com/",
        ]);

        Setting::create([
            "key" => "facebook",
            "value" => "https://www.facebook.com/",
        ]);

        Setting::create([
            "key" => "instagram",
            "value" => "https://www.instagram.com/",
        ]);


        Setting::create([
            "key" => "iframe",
            "value" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192697.88850594574!2d28.84737407844923!3d41.00546324278847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa7040068086b%3A0xe1ccfe98bc01b0d0!2zxLBzdGFuYnVs!5e0!3m2!1sen!2str!4v1700621224438!5m2!1sen!2str",
        ]);

        Setting::create([
            "key" => "mail",
            "value" => "test@test.com",
        ]);

        Setting::create([
            "key" => "fax",
            "value" => "123 456 7890",
        ]);

        Setting::create([
            "key" => "keywords",
            "value" => "test, test, test",
        ]);

        Setting::create([
            "key" => "hakkimizda_title_tr",
            "value" => "Hakkımızda TR",
        ]);

        Setting::create([
            "key" => "hakkimizda_desc_tr",
            "value" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lo",
        ]);

        Setting::create([
            "key" => "hakkimizda_title_en",
            "value" => "Hakkımızda EN",
        ]);

        Setting::create([
            "key" => "hakkimizda_desc_en",
            "value" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lo",
        ]);

        //ansayfa hakkimizda
        Setting::create([
            "key" => "title_1_tr",
            "value" => "Test",
        ]);

        Setting::create([
            "key" => "title_2_tr",
            "value" => "Test",
        ]);

        Setting::create([
            "key" => "title_3_tr",
            "value" => "Test",
        ]);

        Setting::create([
            "key" => "title_4_tr",
            "value" => "Test",
        ]);

        Setting::create([
            "key" => "title_1_en",
            "value" => "Test",
        ]);

        Setting::create([
            "key" => "title_2_en",
            "value" => "Test",
        ]);

        Setting::create([
            "key" => "title_3_en",
            "value" => "Test",
        ]);

        Setting::create([
            "key" => "title_4_en",
            "value" => "Test",
        ]);

        Setting::create([
            "key" => "desc_1_tr",
            "value" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lo",
        ]);

        Setting::create([
            "key" => "desc_2_tr",
            "value" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lo",
        ]);

        Setting::create([
            "key" => "desc_3_tr",
            "value" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lo",
        ]);

        Setting::create([
            "key" => "desc_4_tr",
            "value" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lo",
        ]);

        Setting::create([
            "key" => "desc_1_en",
            "value" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lo",
        ]);

        Setting::create([
            "key" => "desc_2_en",
            "value" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lo",
        ]);

        Setting::create([
            "key" => "desc_3_en",
            "value" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lo",
        ]);

        Setting::create([
            "key" => "desc_4_en",
            "value" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lo",
        ]);
    }
}
