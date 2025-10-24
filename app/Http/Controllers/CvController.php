<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CvController extends Controller
{
    public function show()
    {
        $contactInfo = [
            [
                'icon' => 'fas fa-envelope',
                'label' => 'Email',
                'value' => 'gagahfajar46@gmail.com'
            ],
            [
                'icon' => 'fas fa-phone',
                'label' => 'Telepon',
                'value' => '+62 857-0128-4308'
            ],
            [
                'icon' => 'fas fa-map-marker-alt',
                'label' => 'Lokasi',
                'value' => 'Klaten, Jawa Tengah'
            ],
            [
                'icon' => 'fab fa-linkedin',
                'label' => 'LinkedIn',
                'value' => 'Gagah Fajar'
            ]
        ];

        $skills = [
            'Bahasa Pemrograman' => ['PHP', 'Java'],
            'Desain Grafis' => ['Adobe Illustrator', 'Adobe Photoshop', 'Corel Draw', 'Canva'],
            'Office' => ['Word', 'Excel', 'Power Point'],
            'Soft Skill' => ['Kerja sama tim', 'Solutif', 'Kreatif', 'Mudah beradaptasi']
        ];

        $experiences = [
            [
                'position' => 'Barista',
                'company' => 'Kalabalik Coffee',
                'period' => '2022 - 2023',
                'description' => 'Bertanggung jawab dalam proses penyajian minuman berbasis kopi maupun non kopi dengan standar kualitas tinggi serta pelayanan yang sopan dan efisien. Mampu mengoperasikan peralatan barista secara profesional dan menjaga kebersihan area kerja sesuai prosedur operasional.',
            ],
            [
                'position' => 'Helpdesk Hutchison 3 Indonesia',
                'company' => 'PT Bach Multi Global',
                'period' => '2021 - 2022',
                'description' => 'Bertanggung jawab memberikan dukungan teknis dan layanan pelanggan terkait jaringan serta sistem internal perusahaan. Melakukan analisis dan penyelesaian kendala teknis secara efisien untuk memastikan stabilitas dan kepuasan pengguna layanan.',
            ],
            [
                'position' => 'Internship Graphic Designer',
                'company' => 'PT Billacreative',
                'period' => '2021',
                'description' => 'Bertanggung jawab dalam pembuatan materi desain visual untuk kebutuhan promosi digital dan cetak sesuai identitas merek perusahaan. Berkolaborasi dengan tim marketing dalam mengembangkan konsep kreatif yang mendukung strategi komunikasi visual.',
            ]
        ];

        $educations = [
            [
                'degree' => 'Sistem Informasi',
                'institution' => 'Universitas Teknologi Yogyakarta',
                'period' => '2023 - Sekarang',
            ],
            [
                'degree' => 'Sistem Informasi Jaringan dan Aplikasi',
                'institution' => 'SMK Negeri 2 Klaten',
                'period' => '2018 - 2022',
            ]
        ];

        $organizations = [
            [
                'position' => 'Wakil Ketua Himpunan Mahasiswa Sistem Informasi',
                'organization' => 'HMSI UTY',
                'period' => '2024 - 2025',
                'description' => 'Bertanggung jawab mendampingi ketua dalam menjalankan program kerja, mengoordinasikan kegiatan antar divisi, serta memastikan seluruh agenda organisasi berjalan efektif.
Berperan aktif dalam pengambilan keputusan strategis dan menjaga komunikasi yang harmonis antara pengurus, anggota, dan pihak fakultas.'
            ],
            [
                'position' => 'Master of Ceremony',
                'organization' => 'Seminar Nasional HMSI UTY',
                'period' => '2025',
                'description' => 'Bertugas memandu jalannya acara secara profesional dengan menjaga suasana kondusif dan interaksi yang komunikatif antara pembicara serta peserta.
Menyusun alur acara dan memastikan setiap sesi berjalan sesuai waktu dan protokol yang telah ditetapkan.'
            ],
            [
                'position' => 'Internship HMSI UTY',
                'organization' => 'HMSI UTY',
                'period' => '2023 - 2024',
                'description' => 'Berperan sebagai peserta magang internal untuk memahami struktur organisasi, alur koordinasi divisi, serta pelaksanaan program kerja himpunan.
Terlibat dalam kegiatan operasional dan pendukung divisi guna mengembangkan kemampuan komunikasi, kerja tim, dan tanggung jawab organisasi.'
            ]
        ];

        return view('cv.show', compact(
            'contactInfo',
            'skills',
            'experiences',
            'educations',
            'organizations'
        ));
    }
}