<?php

namespace Database\Seeders;

use App\Models\IndexBody;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IndexBodySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Dio',
                'image' => 'indexing-bodies/dio.png',
                'link' => 'https://www.doi.org/',
            ],
            [
                'name' => 'Research Gate',
                'image' => 'indexing-bodies/research-gate.png',
                'link' => 'https://www.researchgate.net/',
            ],
            [
                'name' => 'Cross Ref Similarity Check',
                'image' => 'indexing-bodies/crossref.png',
                'link' => 'https://www.crossref.org/',
            ],
            [
                'name' => 'Dimensions',
                'image' => 'indexing-bodies/dimensions.png',
                'link' => 'https://www.dimensions.ai/',
            ],
            [
                'name' => 'Academia',
                'image' => 'indexing-bodies/academia.png',
                'link' => 'https://www.academia.edu/',
            ],
            [
                'name' => 'Mendeley',
                'image' => 'indexing-bodies/mendeley.png',
                'link' => 'https://www.mendeley.com/',
            ],
            [
                'name' => 'Google Scholars',
                'image' => 'indexing-bodies/google-scholar.png',
                'link' => 'https://scholar.google.com/',
            ],
            [
                'name' => 'Cross Ref',
                'image' => 'indexing-bodies/crossref-2.png',
                'link' => 'https://www.crossref.org/',
            ],
            [
                'name' => 'J Gates Indexing',
                'image' => 'indexing-bodies/j-gates-indexing.png',
                'link' => 'https://jgatenext.com/',
            ],
            [
                'name' => 'EuroPub',
                'image' => 'indexing-bodies/euro-pub.png',
                'link' => 'https://europub.co.uk/',
            ],
            [
                'name' => 'EuroPub',
                'image' => 'indexing-bodies/euro-pub.png',
                'link' => 'https://europub.co.uk/',
            ],
            [
                'name' => 'Semantic Scholar',
                'image' => 'indexing-bodies/semantic-scholar.png',
                'link' => 'https://www.semanticscholar.org/',
            ],
            [
                'name' => 'Lens',
                'image' => 'indexing-bodies/lens.png',
                'link' => 'https://www.lens.org/',
            ],
            [
                'name' => 'Scilit',
                'image' => 'indexing-bodies/scilit.png',
                'link' => 'https://www.scilit.net/',
            ],
            [
                'name' => 'OUCI',
                'image' => 'indexing-bodies/ouci.png',
                'link' => 'https://ouci.dntb.gov.ua/en/',
            ],
            [
                'name' => 'Connected Paper',
                'image' => 'indexing-bodies/connected-papers.png',
                'link' => 'https://www.connectedpapers.com/',
            ],
        ];
        IndexBody::insert($data);
    }
}
