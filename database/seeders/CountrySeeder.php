<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Country;

/**
 * Class CountrySeeder
 * @package Database\Seeders
 */
class CountrySeeder extends AbstractSeeder
{
    /**
     * @var array|array[] $data
     */
    private array $data = [
        ['created_at' => 1704891216, 'name' => 'League', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Afghanistan', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Albania', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Algeria', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Andorra', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Angola', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Antigua and Barbuda', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Argentina', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Armenia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Australia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Austria', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Azerbaijan', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Bahamas', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Bahrain', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Bangladesh', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Barbados', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Belarus', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Belgium', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Belize', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Benin', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Bhutan', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Bolivia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Bosnia and Herzegovina', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Botswana', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Brazil', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Brunei', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Bulgaria', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Burkina Faso', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Burundi', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Cabo Verde', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Cambodia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Cameroon', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Canada', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Central African Republic', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Chad', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Chile', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'China', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Colombia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Comoros', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Congo', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Costa Rica', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Cote d\'Ivoire', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Croatia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Cuba', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Cyprus', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Czechia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Denmark', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Djibouti', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Dominica', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Dominican Republic', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'DR Congo', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Ecuador', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Egypt', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'El Salvador', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'England', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Equatorial Guinea', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Eritrea', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Estonia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Eswatini', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Ethiopia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Fiji', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Finland', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'France', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Gabon', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Gambia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Georgia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Germany', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Ghana', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Greece', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Grenada', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Guatemala', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Guinea', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Guinea-Bissau', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Guyana', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Haiti', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Holy See', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Honduras', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Hungary', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Iceland', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'India', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Indonesia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Iran', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Iraq', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Ireland', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Israel', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Italy', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Jamaica', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Japan', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Jordan', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Kazakhstan', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Kenya', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Kiribati', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Kuwait', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Kyrgyzstan', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Laos', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Latvia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Lebanon', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Lesotho', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Liberia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Libya', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Liechtenstein', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Lithuania', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Luxembourg', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Madagascar', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Malawi', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Malaysia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Maldives', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Mali', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Malta', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Marshall Islands', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Mauritania', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Mauritius', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Mexico', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Micronesia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Moldova', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Monaco', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Mongolia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Montenegro', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Morocco', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Mozambique', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Myanmar', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Namibia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Nauru', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Nepal', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Netherlands', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'New Zealand', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Nicaragua', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Niger', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Nigeria', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'North Korea', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'North Macedonia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Northern Ireland', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Norway', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Oman', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Pakistan', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Palau', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Palestine State', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Panama', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Papua New Guinea', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Paraguay', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Peru', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Philippines', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Poland', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Portugal', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Qatar', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Romania', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Russia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Rwanda', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Saint Kitts and Nevis', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Saint Lucia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Saint Vincent and the Grenadines', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Samoa', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'San Marino', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Sao Tome and Principe', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Saudi Arabia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Scotland', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Senegal', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Serbia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Seychelles', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Sierra Leone', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Singapore', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Slovakia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Slovenia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Solomon Islands', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Somalia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'South Africa', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'South Korea', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'South Sudan', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Spain', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Sri Lanka', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Sudan', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Suriname', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Sweden', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Switzerland', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Syria', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Tajikistan', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Tanzania', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Thailand', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Timor-Leste', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Togo', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Tonga', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Trinidad and Tobago', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Tunisia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Turkey', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Turkmenistan', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Tuvalu', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Uganda', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Ukraine', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'United Arab Emirates', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'United States of America', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Uruguay', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Uzbekistan', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Vanuatu', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Venezuela', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Vietnam', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Wales', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Yemen', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Zambia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'name' => 'Zimbabwe', 'updated_at' => 1704891216],
    ];

    /**'
     * @return void
     */
    public function run(): void
    {
        Country::insert($this->data);
    }
}
