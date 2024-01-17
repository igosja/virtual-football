<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

/**
 * Class TeamSeeder
 * @package Database\Seeders
 */
class TeamSeeder extends Seeder
{
    /**
     * @var string[] $list
     */
    private array $list = [
        ['stadium_id' => 1, 'name' => 'League'],
        ['stadium_id' => 2, 'name' => 'River Plate'],
        ['stadium_id' => 3, 'name' => 'Talleres'],
        ['stadium_id' => 4, 'name' => 'Central'],
        ['stadium_id' => 5, 'name' => 'San Lorenzo'],
        ['stadium_id' => 6, 'name' => 'Godoy Cruz'],
        ['stadium_id' => 7, 'name' => 'Boca Jrs'],
        ['stadium_id' => 8, 'name' => 'Estudiantes'],
        ['stadium_id' => 9, 'name' => 'Racing'],
        ['stadium_id' => 10, 'name' => 'Defensa'],
        ['stadium_id' => 11, 'name' => 'Lanus'],
        ['stadium_id' => 12, 'name' => 'Belgrano'],
        ['stadium_id' => 13, 'name' => 'Argentinos Jrs'],
        ['stadium_id' => 14, 'name' => 'At. Tucuman'],
        ['stadium_id' => 15, 'name' => 'Platense'],
        ['stadium_id' => 16, 'name' => 'Newell\'s'],
        ['stadium_id' => 17, 'name' => 'Banfield'],
        ['stadium_id' => 18, 'name' => 'Instituto'],
        ['stadium_id' => 19, 'name' => 'Huracan'],
        ['stadium_id' => 20, 'name' => 'Independiente'],
        ['stadium_id' => 21, 'name' => 'Velez'],
        ['stadium_id' => 22, 'name' => 'Barracas'],
        ['stadium_id' => 23, 'name' => 'Central Cordoba'],
        ['stadium_id' => 24, 'name' => 'Tigre'],
        ['stadium_id' => 25, 'name' => 'Sarmiento'],
        ['stadium_id' => 26, 'name' => 'Union'],
        ['stadium_id' => 27, 'name' => 'Colon'],
        ['stadium_id' => 28, 'name' => 'Gimnasia LP'],
        ['stadium_id' => 29, 'name' => 'Arsenal'],
        ['stadium_id' => 30, 'name' => 'Almirante Brown'],
        ['stadium_id' => 31, 'name' => 'Agropecuario Argentino'],
        ['stadium_id' => 32, 'name' => 'San Martin'],
        ['stadium_id' => 33, 'name' => 'Estudiantes'],
        ['stadium_id' => 34, 'name' => 'Anderlecht'],
        ['stadium_id' => 35, 'name' => 'Antwerp'],
        ['stadium_id' => 36, 'name' => 'Cercle Brugge'],
        ['stadium_id' => 37, 'name' => 'Charleroi'],
        ['stadium_id' => 38, 'name' => 'Brugge'],
        ['stadium_id' => 39, 'name' => 'Eupen'],
        ['stadium_id' => 40, 'name' => 'Genk'],
        ['stadium_id' => 41, 'name' => 'Gent'],
        ['stadium_id' => 42, 'name' => 'Kortrijk'],
        ['stadium_id' => 43, 'name' => 'Mechelen'],
        ['stadium_id' => 44, 'name' => 'Leuven'],
        ['stadium_id' => 45, 'name' => 'Molenbeek'],
        ['stadium_id' => 46, 'name' => 'Sint-Truiden'],
        ['stadium_id' => 47, 'name' => 'Standard Liege'],
        ['stadium_id' => 48, 'name' => 'Union'],
        ['stadium_id' => 49, 'name' => 'Westerlo'],
        ['stadium_id' => 50, 'name' => 'Futures'],
        ['stadium_id' => 51, 'name' => 'Beerschot'],
        ['stadium_id' => 52, 'name' => 'Beveren'],
        ['stadium_id' => 53, 'name' => 'Club NXT'],
        ['stadium_id' => 54, 'name' => 'Deinze'],
        ['stadium_id' => 55, 'name' => 'Dender'],
        ['stadium_id' => 56, 'name' => 'Francs Borains'],
        ['stadium_id' => 57, 'name' => 'Jong Genk'],
        ['stadium_id' => 58, 'name' => 'Lierse Kempenzonen'],
        ['stadium_id' => 59, 'name' => 'Lommel'],
        ['stadium_id' => 60, 'name' => 'Oostende'],
        ['stadium_id' => 61, 'name' => 'Patro Eisden Maasmechelen'],
        ['stadium_id' => 62, 'name' => 'Liege'],
        ['stadium_id' => 63, 'name' => 'Seraing'],
        ['stadium_id' => 64, 'name' => 'SL16'],
        ['stadium_id' => 65, 'name' => 'Zulte Waregem'],
        ['stadium_id' => 66, 'name' => 'America Mineiro'],
        ['stadium_id' => 67, 'name' => 'Athletico Paranaense'],
        ['stadium_id' => 68, 'name' => 'Atletico Mineiro'],
        ['stadium_id' => 69, 'name' => 'Bahia'],
        ['stadium_id' => 70, 'name' => 'Botafogo'],
        ['stadium_id' => 71, 'name' => 'Corinthians'],
        ['stadium_id' => 72, 'name' => 'Coritiba'],
        ['stadium_id' => 73, 'name' => 'Cruzeiro'],
        ['stadium_id' => 74, 'name' => 'Cuiaba'],
        ['stadium_id' => 75, 'name' => 'Flamengo'],
        ['stadium_id' => 76, 'name' => 'Fluminense'],
        ['stadium_id' => 77, 'name' => 'Fortaleza'],
        ['stadium_id' => 78, 'name' => 'Goias'],
        ['stadium_id' => 79, 'name' => 'Gremio'],
        ['stadium_id' => 80, 'name' => 'Internacional'],
        ['stadium_id' => 81, 'name' => 'Palmeiras'],
        ['stadium_id' => 82, 'name' => 'Red Bull Bragantino'],
        ['stadium_id' => 83, 'name' => 'Santos'],
        ['stadium_id' => 84, 'name' => 'Sao Paulo'],
        ['stadium_id' => 85, 'name' => 'Vasco da Gama'],
        ['stadium_id' => 86, 'name' => 'Vitoria'],
        ['stadium_id' => 87, 'name' => 'Juventude'],
        ['stadium_id' => 88, 'name' => 'Criciuma'],
        ['stadium_id' => 89, 'name' => 'Atletico Goianiense'],
        ['stadium_id' => 90, 'name' => 'Novorizontino'],
        ['stadium_id' => 91, 'name' => 'Mirassol'],
        ['stadium_id' => 92, 'name' => 'Sport'],
        ['stadium_id' => 93, 'name' => 'Vila Nova'],
        ['stadium_id' => 94, 'name' => 'CRB'],
        ['stadium_id' => 95, 'name' => 'Guarani'],
        ['stadium_id' => 96, 'name' => 'Ceara'],
        ['stadium_id' => 97, 'name' => 'Botafogo'],
        ['stadium_id' => 98, 'name' => 'Arsenal'],
        ['stadium_id' => 99, 'name' => 'Aston Villa'],
        ['stadium_id' => 100, 'name' => 'Bournemouth'],
        ['stadium_id' => 101, 'name' => 'Brentford'],
        ['stadium_id' => 102, 'name' => 'Brighton & Hove Albion'],
        ['stadium_id' => 103, 'name' => 'Burnley'],
        ['stadium_id' => 104, 'name' => 'Chelsea'],
        ['stadium_id' => 105, 'name' => 'Crystal Palace'],
        ['stadium_id' => 106, 'name' => 'Everton'],
        ['stadium_id' => 107, 'name' => 'Fulham'],
        ['stadium_id' => 108, 'name' => 'Liverpool'],
        ['stadium_id' => 109, 'name' => 'Luton Town'],
        ['stadium_id' => 110, 'name' => 'Manchester City'],
        ['stadium_id' => 111, 'name' => 'Manchester United'],
        ['stadium_id' => 112, 'name' => 'Newcastle United'],
        ['stadium_id' => 113, 'name' => 'Nottingham Forest'],
        ['stadium_id' => 114, 'name' => 'Sheffield United'],
        ['stadium_id' => 115, 'name' => 'Tottenham Hotspur'],
        ['stadium_id' => 116, 'name' => 'West Ham United'],
        ['stadium_id' => 117, 'name' => 'Wolverhampton Wanderers'],
        ['stadium_id' => 118, 'name' => 'Leicester City'],
        ['stadium_id' => 119, 'name' => 'Ipswich Town'],
        ['stadium_id' => 120, 'name' => 'Southampton'],
        ['stadium_id' => 121, 'name' => 'Leeds United'],
        ['stadium_id' => 122, 'name' => 'West Bromwich Albion'],
        ['stadium_id' => 123, 'name' => 'Sunderland'],
        ['stadium_id' => 124, 'name' => 'Hull City'],
        ['stadium_id' => 125, 'name' => 'Coventry City'],
        ['stadium_id' => 126, 'name' => 'Norwich City'],
        ['stadium_id' => 127, 'name' => 'Watford'],
        ['stadium_id' => 128, 'name' => 'Bristol City'],
        ['stadium_id' => 129, 'name' => 'Middlesbrough'],
        ['stadium_id' => 130, 'name' => 'Brest'],
        ['stadium_id' => 131, 'name' => 'Clermont'],
        ['stadium_id' => 132, 'name' => 'Le Havre'],
        ['stadium_id' => 133, 'name' => 'Lens'],
        ['stadium_id' => 134, 'name' => 'Lille'],
        ['stadium_id' => 135, 'name' => 'Lorient'],
        ['stadium_id' => 136, 'name' => 'Lyon'],
        ['stadium_id' => 137, 'name' => 'Marseille'],
        ['stadium_id' => 138, 'name' => 'Metz'],
        ['stadium_id' => 139, 'name' => 'Monaco'],
        ['stadium_id' => 140, 'name' => 'Montpellier'],
        ['stadium_id' => 141, 'name' => 'Nantes'],
        ['stadium_id' => 142, 'name' => 'Nice'],
        ['stadium_id' => 143, 'name' => 'Paris Saint-Germain'],
        ['stadium_id' => 144, 'name' => 'Reims'],
        ['stadium_id' => 145, 'name' => 'Rennes'],
        ['stadium_id' => 146, 'name' => 'Strasbourg'],
        ['stadium_id' => 147, 'name' => 'Toulouse'],
        ['stadium_id' => 148, 'name' => 'Ajaccio'],
        ['stadium_id' => 149, 'name' => 'Amiens'],
        ['stadium_id' => 150, 'name' => 'Angers'],
        ['stadium_id' => 151, 'name' => 'Auxerre'],
        ['stadium_id' => 152, 'name' => 'Bordeaux'],
        ['stadium_id' => 153, 'name' => 'Caen'],
        ['stadium_id' => 154, 'name' => 'Concarneau'],
        ['stadium_id' => 155, 'name' => 'Grenoble'],
        ['stadium_id' => 156, 'name' => 'Guingamp'],
        ['stadium_id' => 157, 'name' => 'Laval'],
        ['stadium_id' => 158, 'name' => 'Paris FC'],
        ['stadium_id' => 159, 'name' => 'Pau'],
        ['stadium_id' => 160, 'name' => 'Rodez'],
        ['stadium_id' => 161, 'name' => 'Saint-Etienne'],
        ['stadium_id' => 162, 'name' => 'FC Augsburg'],
        ['stadium_id' => 163, 'name' => 'Union Berlin'],
        ['stadium_id' => 164, 'name' => 'VfL Bochum'],
        ['stadium_id' => 165, 'name' => 'Werder Bremen'],
        ['stadium_id' => 166, 'name' => 'Darmstadt 98'],
        ['stadium_id' => 167, 'name' => 'Borussia Dortmund'],
        ['stadium_id' => 168, 'name' => 'Eintracht Frankfurt'],
        ['stadium_id' => 169, 'name' => 'SC Freiburg'],
        ['stadium_id' => 170, 'name' => 'FC Heidenheim'],
        ['stadium_id' => 171, 'name' => 'TSG Hoffenheim'],
        ['stadium_id' => 172, 'name' => 'FC Koln'],
        ['stadium_id' => 173, 'name' => 'RB Leipzig'],
        ['stadium_id' => 174, 'name' => 'Bayer Leverkusen'],
        ['stadium_id' => 175, 'name' => 'Mainz 05'],
        ['stadium_id' => 176, 'name' => 'Borussia Monchengladbach'],
        ['stadium_id' => 177, 'name' => 'Bayern Munich'],
        ['stadium_id' => 178, 'name' => 'VfB Stuttgart'],
        ['stadium_id' => 179, 'name' => 'VfL Wolfsburg'],
        ['stadium_id' => 180, 'name' => 'Hertha BSC'],
        ['stadium_id' => 181, 'name' => 'Fortuna Dusseldorf'],
        ['stadium_id' => 182, 'name' => 'SV Elversberg'],
        ['stadium_id' => 183, 'name' => 'Greuther Furth'],
        ['stadium_id' => 184, 'name' => 'Hamburger SV'],
        ['stadium_id' => 185, 'name' => 'Hannover 96'],
        ['stadium_id' => 186, 'name' => 'Karlsruher SC'],
        ['stadium_id' => 187, 'name' => 'Holstein Kiel'],
        ['stadium_id' => 188, 'name' => 'FC Magdeburg'],
        ['stadium_id' => 189, 'name' => 'FC Nurnberg'],
        ['stadium_id' => 190, 'name' => 'SC Paderborn'],
        ['stadium_id' => 191, 'name' => 'Schalke 04'],
        ['stadium_id' => 192, 'name' => 'FC St Pauli'],
        ['stadium_id' => 193, 'name' => 'Wehen Wiesbaden'],
        ['stadium_id' => 194, 'name' => 'Atalanta'],
        ['stadium_id' => 195, 'name' => 'Bologna'],
        ['stadium_id' => 196, 'name' => 'Cagliari'],
        ['stadium_id' => 197, 'name' => 'Empoli'],
        ['stadium_id' => 198, 'name' => 'Fiorentina'],
        ['stadium_id' => 199, 'name' => 'Frosinone'],
        ['stadium_id' => 200, 'name' => 'Genoa'],
        ['stadium_id' => 201, 'name' => 'Hellas Verona'],
        ['stadium_id' => 202, 'name' => 'Inter Milan'],
        ['stadium_id' => 203, 'name' => 'Juventus'],
        ['stadium_id' => 204, 'name' => 'Lazio'],
        ['stadium_id' => 205, 'name' => 'Lecce'],
        ['stadium_id' => 206, 'name' => 'Milan'],
        ['stadium_id' => 207, 'name' => 'Monza'],
        ['stadium_id' => 208, 'name' => 'Napoli'],
        ['stadium_id' => 209, 'name' => 'Roma'],
        ['stadium_id' => 210, 'name' => 'Salernitana'],
        ['stadium_id' => 211, 'name' => 'Sassuolo'],
        ['stadium_id' => 212, 'name' => 'Torino'],
        ['stadium_id' => 213, 'name' => 'Udinese'],
        ['stadium_id' => 214, 'name' => 'Bari'],
        ['stadium_id' => 215, 'name' => 'Brescia'],
        ['stadium_id' => 216, 'name' => 'Catanzaro'],
        ['stadium_id' => 217, 'name' => 'Cittadella'],
        ['stadium_id' => 218, 'name' => 'Como'],
        ['stadium_id' => 219, 'name' => 'Cremonese'],
        ['stadium_id' => 220, 'name' => 'Modena'],
        ['stadium_id' => 221, 'name' => 'Palermo'],
        ['stadium_id' => 222, 'name' => 'Parma'],
        ['stadium_id' => 223, 'name' => 'Sampdoria'],
        ['stadium_id' => 224, 'name' => 'Sudtirol'],
        ['stadium_id' => 225, 'name' => 'Venezia'],
        ['stadium_id' => 226, 'name' => 'Ajax'],
        ['stadium_id' => 227, 'name' => 'Almere City'],
        ['stadium_id' => 228, 'name' => 'AZ'],
        ['stadium_id' => 229, 'name' => 'Excelsior'],
        ['stadium_id' => 230, 'name' => 'Feyenoord'],
        ['stadium_id' => 231, 'name' => 'Fortuna Sittard'],
        ['stadium_id' => 232, 'name' => 'Go Ahead Eagles'],
        ['stadium_id' => 233, 'name' => 'Heerenveen'],
        ['stadium_id' => 234, 'name' => 'Heracles Almelo'],
        ['stadium_id' => 235, 'name' => 'NEC'],
        ['stadium_id' => 236, 'name' => 'PEC Zwolle'],
        ['stadium_id' => 237, 'name' => 'PSV'],
        ['stadium_id' => 238, 'name' => 'RKC Waalwijk'],
        ['stadium_id' => 239, 'name' => 'Sparta Rotterdam'],
        ['stadium_id' => 240, 'name' => 'Twente'],
        ['stadium_id' => 241, 'name' => 'Utrecht'],
        ['stadium_id' => 242, 'name' => 'Vitesse'],
        ['stadium_id' => 243, 'name' => 'Volendam'],
        ['stadium_id' => 244, 'name' => 'ADO Den Haag'],
        ['stadium_id' => 245, 'name' => 'Cambuur'],
        ['stadium_id' => 246, 'name' => 'Dordrecht'],
        ['stadium_id' => 247, 'name' => 'Eindhoven'],
        ['stadium_id' => 248, 'name' => 'Emmen'],
        ['stadium_id' => 249, 'name' => 'De Graafschap'],
        ['stadium_id' => 250, 'name' => 'Groningen'],
        ['stadium_id' => 251, 'name' => 'Helmond Sport'],
        ['stadium_id' => 252, 'name' => 'Den Bosch'],
        ['stadium_id' => 253, 'name' => 'MVV Maastricht'],
        ['stadium_id' => 254, 'name' => 'NAC Breda'],
        ['stadium_id' => 255, 'name' => 'Roda JC Kerkrade'],
        ['stadium_id' => 256, 'name' => 'VVV-Venlo'],
        ['stadium_id' => 257, 'name' => 'Willem II'],
        ['stadium_id' => 258, 'name' => 'Arouca'],
        ['stadium_id' => 259, 'name' => 'Benfica'],
        ['stadium_id' => 260, 'name' => 'Boavista'],
        ['stadium_id' => 261, 'name' => 'Braga'],
        ['stadium_id' => 262, 'name' => 'Casa Pia'],
        ['stadium_id' => 263, 'name' => 'Chaves'],
        ['stadium_id' => 264, 'name' => 'Estoril'],
        ['stadium_id' => 265, 'name' => 'Estrela da Amadora'],
        ['stadium_id' => 266, 'name' => 'Famalicao'],
        ['stadium_id' => 267, 'name' => 'Farense'],
        ['stadium_id' => 268, 'name' => 'Gil Vicente'],
        ['stadium_id' => 269, 'name' => 'Moreirense'],
        ['stadium_id' => 270, 'name' => 'Portimonense'],
        ['stadium_id' => 271, 'name' => 'Porto'],
        ['stadium_id' => 272, 'name' => 'Rio Ave'],
        ['stadium_id' => 273, 'name' => 'Sporting CP'],
        ['stadium_id' => 274, 'name' => 'Vitoria de Guimaraes'],
        ['stadium_id' => 275, 'name' => 'Vizela'],
        ['stadium_id' => 276, 'name' => 'Academico de Viseu'],
        ['stadium_id' => 277, 'name' => 'AVS'],
        ['stadium_id' => 278, 'name' => 'Benfica B'],
        ['stadium_id' => 279, 'name' => 'Feirense'],
        ['stadium_id' => 280, 'name' => 'Mafra'],
        ['stadium_id' => 281, 'name' => 'Maritimo'],
        ['stadium_id' => 282, 'name' => 'Nacional'],
        ['stadium_id' => 283, 'name' => 'Oliveirense'],
        ['stadium_id' => 284, 'name' => 'Pacos de Ferreira'],
        ['stadium_id' => 285, 'name' => 'Porto B'],
        ['stadium_id' => 286, 'name' => 'Santa Clara'],
        ['stadium_id' => 287, 'name' => 'Tondela'],
        ['stadium_id' => 288, 'name' => 'Torreense'],
        ['stadium_id' => 289, 'name' => 'Uniao de Leiria'],
        ['stadium_id' => 290, 'name' => 'Alaves'],
        ['stadium_id' => 291, 'name' => 'Almeria'],
        ['stadium_id' => 292, 'name' => 'Athletic Bilbao'],
        ['stadium_id' => 293, 'name' => 'Atletico Madrid'],
        ['stadium_id' => 294, 'name' => 'Barcelona'],
        ['stadium_id' => 295, 'name' => 'Cadiz'],
        ['stadium_id' => 296, 'name' => 'Celta Vigo'],
        ['stadium_id' => 297, 'name' => 'Getafe'],
        ['stadium_id' => 298, 'name' => 'Girona'],
        ['stadium_id' => 299, 'name' => 'Granada'],
        ['stadium_id' => 300, 'name' => 'Las Palmas'],
        ['stadium_id' => 301, 'name' => 'Mallorca'],
        ['stadium_id' => 302, 'name' => 'Osasuna'],
        ['stadium_id' => 303, 'name' => 'Rayo Vallecano'],
        ['stadium_id' => 304, 'name' => 'Real Betis'],
        ['stadium_id' => 305, 'name' => 'Real Madrid'],
        ['stadium_id' => 306, 'name' => 'Real Sociedad'],
        ['stadium_id' => 307, 'name' => 'Sevilla'],
        ['stadium_id' => 308, 'name' => 'Valencia'],
        ['stadium_id' => 309, 'name' => 'Villarreal'],
        ['stadium_id' => 310, 'name' => 'Burgos'],
        ['stadium_id' => 311, 'name' => 'Eibar'],
        ['stadium_id' => 312, 'name' => 'Elche'],
        ['stadium_id' => 313, 'name' => 'Espanyol'],
        ['stadium_id' => 314, 'name' => 'Leganes'],
        ['stadium_id' => 315, 'name' => 'Levante'],
        ['stadium_id' => 316, 'name' => 'Oviedo'],
        ['stadium_id' => 317, 'name' => 'Racing Ferrol'],
        ['stadium_id' => 318, 'name' => 'Racing Santander'],
        ['stadium_id' => 319, 'name' => 'Sporting Gijon'],
        ['stadium_id' => 320, 'name' => 'Tenerife'],
        ['stadium_id' => 321, 'name' => 'Valladolid'],
    ];

    /**
     * @return void
     */
    public function run(): void
    {
        foreach ($this->list as $item) {
            Team::create([
                'name' => $item['name'],
                'stadium_id' => $item['stadium_id'],
            ]);
        }
    }
}
