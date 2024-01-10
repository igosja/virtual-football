<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

/**
 * Class CitySeeder
 * @package Database\Seeders
 */
class CitySeeder extends Seeder
{
    /**
     * @var array|array[] $data
     */
    private array $data = [
        ['created_at' => 1704891216, 'country_id' => 1, 'name' => 'League', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 8, 'name' => 'Avellaneda', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 8, 'name' => 'Banfield', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 8, 'name' => 'Buenos Aires', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 8, 'name' => 'Carlos Casares', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 8, 'name' => 'Cordoba', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 8, 'name' => 'Florencio Varela', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 8, 'name' => 'Florida Este', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 8, 'name' => 'Godoy Cruz', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 8, 'name' => 'Isidro Casanova', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 8, 'name' => 'Junin', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 8, 'name' => 'La Plata', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 8, 'name' => 'Lanus', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 8, 'name' => 'Rio Cuarto', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 8, 'name' => 'Rosario', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 8, 'name' => 'Santa Fe', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 8, 'name' => 'Santiago del Estero', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 8, 'name' => 'Sarandi', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 8, 'name' => 'Tucuman', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 8, 'name' => 'Victoria', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 18, 'name' => 'Anderlecht', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 18, 'name' => 'Antwerp', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 18, 'name' => 'Beveren', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 18, 'name' => 'Boussu', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 18, 'name' => 'Bruges', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 18, 'name' => 'Charleroi', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 18, 'name' => 'Deinze', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 18, 'name' => 'Denderleeuw', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 18, 'name' => 'Eupen', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 18, 'name' => 'Forest', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 18, 'name' => 'Genk', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 18, 'name' => 'Ghent', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 18, 'name' => 'Kortrijk', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 18, 'name' => 'Leuven', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 18, 'name' => 'Liege', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 18, 'name' => 'Lier', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 18, 'name' => 'Lommel', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 18, 'name' => 'Maasmechelen', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 18, 'name' => 'Mechelen', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 18, 'name' => 'Molenbeek', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 18, 'name' => 'Ostend', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 18, 'name' => 'Seraing', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 18, 'name' => 'Sint-Truiden', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 18, 'name' => 'Waregem', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 18, 'name' => 'Westerlo', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 25, 'name' => 'Belo Horizonte', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 25, 'name' => 'Braganca Paulista', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 25, 'name' => 'Campinas', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 25, 'name' => 'Caxias do Sul', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 25, 'name' => 'Criciuma', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 25, 'name' => 'Cuiaba', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 25, 'name' => 'Curitiba', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 25, 'name' => 'Fortaleza', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 25, 'name' => 'Goiania', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 25, 'name' => 'Maceio', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 25, 'name' => 'Mirassol', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 25, 'name' => 'Novo Horizonte', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 25, 'name' => 'Porto Alegre', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 25, 'name' => 'Recife', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 25, 'name' => 'Ribeirao Preto', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 25, 'name' => 'Rio de Janeiro', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 25, 'name' => 'Salvador', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 25, 'name' => 'Santos', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 25, 'name' => 'Sao Paulo', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 55, 'name' => 'Birmingham', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 55, 'name' => 'Bournemouth', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 55, 'name' => 'Brighton', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 55, 'name' => 'Bristol', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 55, 'name' => 'Burnley', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 55, 'name' => 'Coventry', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 55, 'name' => 'Hull', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 55, 'name' => 'Ipswich', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 55, 'name' => 'Leeds', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 55, 'name' => 'Leicester', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 55, 'name' => 'Liverpool', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 55, 'name' => 'London', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 55, 'name' => 'Luton', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 55, 'name' => 'Manchester', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 55, 'name' => 'Middlesbrough', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 55, 'name' => 'Newcastle', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 55, 'name' => 'Norwich', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 55, 'name' => 'Sheffield', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 55, 'name' => 'Southampton', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 55, 'name' => 'Sunderland', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 55, 'name' => 'Watford', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 55, 'name' => 'West Bridgford', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 55, 'name' => 'West Bromwich', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 55, 'name' => 'Wolverhampton', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Ajaccio', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Amiens', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Angers', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Auxerre', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Bordeaux', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Brest', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Caen', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Clermont-Ferrand', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Concarneau', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Grenoble', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Guingamp', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Laval', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Le Havre', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Lens', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Lille', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Longeville-les-Metz', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Lorient', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Lyon', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Marseille', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Monaco', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Montpellier', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Nantes', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Nice', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Paris', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Pau', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Reims', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Rennes', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Rodez', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Saint-Etienne', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Strasbourg', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 63, 'name' => 'Toulouse', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 67, 'name' => 'Augsburg', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 67, 'name' => 'Berlin', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 67, 'name' => 'Bochum', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 67, 'name' => 'Bremen', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 67, 'name' => 'Cologne', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 67, 'name' => 'Darmstadt', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 67, 'name' => 'Dortmund', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 67, 'name' => 'Dusseldorf', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 67, 'name' => 'Frankfurt', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 67, 'name' => 'Freiburg im Breisgau', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 67, 'name' => 'Furth', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 67, 'name' => 'Gelsenkirchen', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 67, 'name' => 'Hamburg', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 67, 'name' => 'Hanover', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 67, 'name' => 'Heidenheim', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 67, 'name' => 'Karlsruhe', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 67, 'name' => 'Kiel', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 67, 'name' => 'Leipzig', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 67, 'name' => 'Leverkusen', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 67, 'name' => 'Magdeburg', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 67, 'name' => 'Mainz', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 67, 'name' => 'Monchengladbach', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 67, 'name' => 'Munich', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 67, 'name' => 'Nuremberg', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 67, 'name' => 'Paderborn', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 67, 'name' => 'Sinsheim', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 67, 'name' => 'Spiesen-Elversberg', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 67, 'name' => 'Stuttgart', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 67, 'name' => 'Wiesbaden', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 67, 'name' => 'Wolfsburg', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 86, 'name' => 'Bari', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 86, 'name' => 'Bergamo', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 86, 'name' => 'Bologna', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 86, 'name' => 'Bolzano', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 86, 'name' => 'Brescia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 86, 'name' => 'Cagliari', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 86, 'name' => 'Catanzaro', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 86, 'name' => 'Cittadella', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 86, 'name' => 'Como', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 86, 'name' => 'Cremona', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 86, 'name' => 'Empoli', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 86, 'name' => 'Florence', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 86, 'name' => 'Frosinone', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 86, 'name' => 'Genoa', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 86, 'name' => 'Lecce', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 86, 'name' => 'Milan', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 86, 'name' => 'Modena', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 86, 'name' => 'Monza', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 86, 'name' => 'Naples', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 86, 'name' => 'Palermo', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 86, 'name' => 'Parma', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 86, 'name' => 'Rome', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 86, 'name' => 'Salerno', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 86, 'name' => 'Sassuolo', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 86, 'name' => 'Turin', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 86, 'name' => 'Udine', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 86, 'name' => 'Venice', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 86, 'name' => 'Verona', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 125, 'name' => 'Alkmaar', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 125, 'name' => 'Almelo', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 125, 'name' => 'Almere', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 125, 'name' => 'Amsterdam', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 125, 'name' => 'Arnhem', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 125, 'name' => 'Breda', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 125, 'name' => 'Deventer', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 125, 'name' => 'Doetinchem', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 125, 'name' => 'Dordrecht', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 125, 'name' => 'Eindhoven', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 125, 'name' => 'Emmen', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 125, 'name' => 'Enschede', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 125, 'name' => 'Groningen', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 125, 'name' => 'Heerenveen', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 125, 'name' => 'Helmond', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 125, 'name' => 'Hertogenbosch', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 125, 'name' => 'Kerkrade', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 125, 'name' => 'Leeuwarden', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 125, 'name' => 'Maastricht', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 125, 'name' => 'Nijmegen', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 125, 'name' => 'Rotterdam', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 125, 'name' => 'Sittard', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 125, 'name' => 'The Hague', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 125, 'name' => 'Tilburg', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 125, 'name' => 'Utrecht', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 125, 'name' => 'Venlo', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 125, 'name' => 'Volendam', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 125, 'name' => 'Waalwijk', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 125, 'name' => 'Zwolle', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 144, 'name' => 'Amadora', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 144, 'name' => 'Arouca', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 144, 'name' => 'Barcelos', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 144, 'name' => 'Braga', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 144, 'name' => 'Chaves', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 144, 'name' => 'Estoril', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 144, 'name' => 'Faro', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 144, 'name' => 'Funchal', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 144, 'name' => 'Guimaraes', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 144, 'name' => 'Leiria', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 144, 'name' => 'Lisbon', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 144, 'name' => 'Mafra', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 144, 'name' => 'Moreira de Conegos', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 144, 'name' => 'Oliveira de Azemeis', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 144, 'name' => 'Pacos de Ferreira', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 144, 'name' => 'Ponta Delgada', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 144, 'name' => 'Portimao', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 144, 'name' => 'Porto', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 144, 'name' => 'Santa Maria da Feira', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 144, 'name' => 'Seixal', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 144, 'name' => 'Tondela', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 144, 'name' => 'Torres Vedras', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 144, 'name' => 'Vila das Aves', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 144, 'name' => 'Vila do Conde', 'updated_at' => 1704891216],
        [
            'created_at' => 1704891216,
            'country_id' => 144,
            'name' => 'Vila Nova de Famalicao',
            'updated_at' => 1704891216
        ],
        ['created_at' => 1704891216, 'country_id' => 144, 'name' => 'Vila Nova de Gaia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 144, 'name' => 'Viseu', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 144, 'name' => 'Vizela', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 169, 'name' => 'Almeria', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 169, 'name' => 'Barcelona', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 169, 'name' => 'Bilbao', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 169, 'name' => 'Burgos', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 169, 'name' => 'Cadiz', 'updated_at' => 1704891216],
        [
            'created_at' => 1704891216,
            'country_id' => 169,
            'name' => 'Cornella de Llobregat',
            'updated_at' => 1704891216
        ],
        ['created_at' => 1704891216, 'country_id' => 169, 'name' => 'Eibar', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 169, 'name' => 'Elche', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 169, 'name' => 'Ferrol', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 169, 'name' => 'Getafe', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 169, 'name' => 'Gijon', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 169, 'name' => 'Girona', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 169, 'name' => 'Granada', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 169, 'name' => 'Las Palmas', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 169, 'name' => 'Leganes', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 169, 'name' => 'Madrid', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 169, 'name' => 'Oviedo', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 169, 'name' => 'Palma', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 169, 'name' => 'Pamplona', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 169, 'name' => 'San Sebastian', 'updated_at' => 1704891216],
        [
            'created_at' => 1704891216,
            'country_id' => 169,
            'name' => 'Santa Cruz de Tenerife',
            'updated_at' => 1704891216
        ],
        ['created_at' => 1704891216, 'country_id' => 169, 'name' => 'Santander', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 169, 'name' => 'Seville', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 169, 'name' => 'Valencia', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 169, 'name' => 'Valladolid', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 169, 'name' => 'Vigo', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 169, 'name' => 'Villarreal', 'updated_at' => 1704891216],
        ['created_at' => 1704891216, 'country_id' => 169, 'name' => 'Vitoria-Gasteiz', 'updated_at' => 1704891216],
    ];


    /**
     * @return void'
     */
    public function run(): void
    {
        City::insert($this->data);
    }
}
