<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('countries')->delete();
        $countriesAndCodes = array(
            array('name_english'=>'Afghanistan', 'ISO_2_letter'=>'AF', 'ISO_3_letter'=>'AFG', 'TLD'=>'.af'),
            array('name_english'=>'Albania', 'ISO_2_letter'=>'AL', 'ISO_3_letter'=>'ALB', 'TLD'=>'.al'),
            array('name_english'=>'Algeria', 'ISO_2_letter'=>'DZ', 'ISO_3_letter'=>'DZA', 'TLD'=>'.dz'),
            array('name_english'=>'American Samoa', 'ISO_2_letter'=>'AS', 'ISO_3_letter'=>'ASM', 'TLD'=>'.as'),
            array('name_english'=>'Andorra', 'ISO_2_letter'=>'AD', 'ISO_3_letter'=>'AND', 'TLD'=>'.ad'),
            array('name_english'=>'Angola', 'ISO_2_letter'=>'AO', 'ISO_3_letter'=>'AGO', 'TLD'=>'.ao'),
            array('name_english'=>'Anguilla', 'ISO_2_letter'=>'AI', 'ISO_3_letter'=>'AIA', 'TLD'=>'.ai'),
            array('name_english'=>'Antarctica', 'ISO_2_letter'=>'AQ', 'ISO_3_letter'=>'ATA', 'TLD'=>'.aq'),
            array('name_english'=>'Antigua and Barbuda', 'ISO_2_letter'=>'AG', 'ISO_3_letter'=>'ATG', 'TLD'=>'.ag'),
            array('name_english'=>'Argentina', 'ISO_2_letter'=>'AR', 'ISO_3_letter'=>'ARG', 'TLD'=>'.ar'),
            array('name_english'=>'Armenia', 'ISO_2_letter'=>'AM', 'ISO_3_letter'=>'ARM', 'TLD'=>'.am'),
            array('name_english'=>'Aruba', 'ISO_2_letter'=>'AW', 'ISO_3_letter'=>'ABW', 'TLD'=>'.aw'),
            array('name_english'=>'Australia', 'ISO_2_letter'=>'AU', 'ISO_3_letter'=>'AUS', 'TLD'=>'.au'),
            array('name_english'=>'Austria', 'ISO_2_letter'=>'AT', 'ISO_3_letter'=>'AUT', 'TLD'=>'.at'),
            array('name_english'=>'Azerbaijan', 'ISO_2_letter'=>'AZ', 'ISO_3_letter'=>'AZE', 'TLD'=>'.az'),
            array('name_english'=>'Bahamas', 'ISO_2_letter'=>'BS', 'ISO_3_letter'=>'BHS', 'TLD'=>'.bs'),
            array('name_english'=>'Bahrain', 'ISO_2_letter'=>'BH', 'ISO_3_letter'=>'BHR', 'TLD'=>'.bh'),
            array('name_english'=>'Bangladesh', 'ISO_2_letter'=>'BD', 'ISO_3_letter'=>'BGD', 'TLD'=>'.bd'),
            array('name_english'=>'Barbados', 'ISO_2_letter'=>'BB', 'ISO_3_letter'=>'BRB', 'TLD'=>'.bb'),
            array('name_english'=>'Belarus', 'ISO_2_letter'=>'BY', 'ISO_3_letter'=>'BLR', 'TLD'=>'.by'),
            array('name_english'=>'Belgium', 'ISO_2_letter'=>'BE', 'ISO_3_letter'=>'BEL', 'TLD'=>'.be'),
            array('name_english'=>'Belize', 'ISO_2_letter'=>'BZ', 'ISO_3_letter'=>'BLZ', 'TLD'=>'.bz'),
            array('name_english'=>'Benin', 'ISO_2_letter'=>'BJ', 'ISO_3_letter'=>'BEN', 'TLD'=>'.bj'),
            array('name_english'=>'Bermuda', 'ISO_2_letter'=>'BM', 'ISO_3_letter'=>'BMU', 'TLD'=>'.bm'),
            array('name_english'=>'Bhutan', 'ISO_2_letter'=>'BT', 'ISO_3_letter'=>'BTN', 'TLD'=>'.bt'),
            array('name_english'=>'Bolivia (Plurinational State of),', 'ISO_2_letter'=>'BO', 'ISO_3_letter'=>'BOL', 'TLD'=>'.bo'),
            array('name_english'=>'Bonaire, Sint Eustatius and Saba', 'ISO_2_letter'=>'BQ', 'ISO_3_letter'=>'BES', 'TLD'=>'.bq'),
            array('name_english'=>'Bosnia and Herzegovina', 'ISO_2_letter'=>'BA', 'ISO_3_letter'=>'BIH', 'TLD'=>'.ba'),
            array('name_english'=>'Botswana', 'ISO_2_letter'=>'BW', 'ISO_3_letter'=>'BWA', 'TLD'=>'.bw'),
            array('name_english'=>'Bouvet Island', 'ISO_2_letter'=>'BV', 'ISO_3_letter'=>'BVT', 'TLD'=>'.bv'),
            array('name_english'=>'Brazil', 'ISO_2_letter'=>'BR', 'ISO_3_letter'=>'BRA', 'TLD'=>'.br'),
            array('name_english'=>'British Indian Ocean Territory', 'ISO_2_letter'=>'IO', 'ISO_3_letter'=>'IOT', 'TLD'=>'.io'),
            array('name_english'=>'British Virgin Islands', 'ISO_2_letter'=>'VG', 'ISO_3_letter'=>'VGB', 'TLD'=>'.vg'),
            array('name_english'=>'Brunei Darussalam', 'ISO_2_letter'=>'BN', 'ISO_3_letter'=>'BRN', 'TLD'=>'.bn'),
            array('name_english'=>'Bulgaria', 'ISO_2_letter'=>'BG', 'ISO_3_letter'=>'BGR', 'TLD'=>'.bg'),
            array('name_english'=>'Burkina Faso', 'ISO_2_letter'=>'BF', 'ISO_3_letter'=>'BFA', 'TLD'=>'.bf'),
            array('name_english'=>'Burundi', 'ISO_2_letter'=>'BI', 'ISO_3_letter'=>'BDI', 'TLD'=>'.bi'),
            array('name_english'=>'Cabo Verde', 'ISO_2_letter'=>'CV', 'ISO_3_letter'=>'CPV', 'TLD'=>'.cv'),
            array('name_english'=>'Cambodia', 'ISO_2_letter'=>'KH', 'ISO_3_letter'=>'KHM', 'TLD'=>'.kh'),
            array('name_english'=>'Cameroon', 'ISO_2_letter'=>'CM', 'ISO_3_letter'=>'CMR', 'TLD'=>'.cm'),
            array('name_english'=>'Canada', 'ISO_2_letter'=>'CA', 'ISO_3_letter'=>'CAN', 'TLD'=>'.ca'),
            array('name_english'=>'Cayman Islands', 'ISO_2_letter'=>'KY', 'ISO_3_letter'=>'CYM', 'TLD'=>'.ky'),
            array('name_english'=>'Central African Republic', 'ISO_2_letter'=>'CF', 'ISO_3_letter'=>'CAF', 'TLD'=>'.cf'),
            array('name_english'=>'Chad', 'ISO_2_letter'=>'TD', 'ISO_3_letter'=>'TCD', 'TLD'=>'.td'),
            array('name_english'=>'Chile', 'ISO_2_letter'=>'CL', 'ISO_3_letter'=>'CHL', 'TLD'=>'.cl'),
            array('name_english'=>'China', 'ISO_2_letter'=>'CN', 'ISO_3_letter'=>'CHN', 'TLD'=>'.cn'),
            array('name_english'=>'China, Hong Kong Special Administrative Region', 'ISO_2_letter'=>'HK', 'ISO_3_letter'=>'HKG', 'TLD'=>'.hk'),
            array('name_english'=>'China, Macao Special Administrative Region', 'ISO_2_letter'=>'MO', 'ISO_3_letter'=>'MAC', 'TLD'=>'.mo'),
            array('name_english'=>'Christmas Island', 'ISO_2_letter'=>'CX', 'ISO_3_letter'=>'CXR', 'TLD'=>'.cx'),
            array('name_english'=>'Cocos (Keeling), Islands', 'ISO_2_letter'=>'CC', 'ISO_3_letter'=>'CCK', 'TLD'=>'.cc'),
            array('name_english'=>'Colombia', 'ISO_2_letter'=>'CO', 'ISO_3_letter'=>'COL', 'TLD'=>'.co'),
            array('name_english'=>'Comoros', 'ISO_2_letter'=>'KM', 'ISO_3_letter'=>'COM', 'TLD'=>'.km'),
            array('name_english'=>'Congo', 'ISO_2_letter'=>'CG', 'ISO_3_letter'=>'COG', 'TLD'=>'.cg'),
            array('name_english'=>'Cook Islands', 'ISO_2_letter'=>'CK', 'ISO_3_letter'=>'COK', 'TLD'=>'.ck'),
            array('name_english'=>'Costa Rica', 'ISO_2_letter'=>'CR', 'ISO_3_letter'=>'CRI', 'TLD'=>'.cr'),
            array('name_english'=>'Croatia', 'ISO_2_letter'=>'HR', 'ISO_3_letter'=>'HRV', 'TLD'=>'.hr'),
            array('name_english'=>'Cuba', 'ISO_2_letter'=>'CU', 'ISO_3_letter'=>'CUB', 'TLD'=>'.cu'),
            array('name_english'=>'Curaçao', 'ISO_2_letter'=>'CW', 'ISO_3_letter'=>'CUW', 'TLD'=>'.cw'),
            array('name_english'=>'Cyprus', 'ISO_2_letter'=>'CY', 'ISO_3_letter'=>'CYP', 'TLD'=>'.cy'),
            array('name_english'=>'Czechia', 'ISO_2_letter'=>'CZ', 'ISO_3_letter'=>'CZE', 'TLD'=>'.cz'),
            array('name_english'=>'Côte d\'Ivoire', 'ISO_2_letter'=>'CI', 'ISO_3_letter'=>'CIV', 'TLD'=>'.ci'),
            array('name_english'=>'Democratic People\'s Republic of Korea', 'ISO_2_letter'=>'KP', 'ISO_3_letter'=>'PRK', 'TLD'=>'.kp'),
            array('name_english'=>'Democratic Republic of the Congo', 'ISO_2_letter'=>'CD', 'ISO_3_letter'=>'COD', 'TLD'=>'.cd'),
            array('name_english'=>'Denmark', 'ISO_2_letter'=>'DK', 'ISO_3_letter'=>'DNK', 'TLD'=>'.dk'),
            array('name_english'=>'Djibouti', 'ISO_2_letter'=>'DJ', 'ISO_3_letter'=>'DJI', 'TLD'=>'.dj'),
            array('name_english'=>'Dominica', 'ISO_2_letter'=>'DM', 'ISO_3_letter'=>'DMA', 'TLD'=>'.dm'),
            array('name_english'=>'Dominican Republic', 'ISO_2_letter'=>'DO', 'ISO_3_letter'=>'DOM', 'TLD'=>'.do'),
            array('name_english'=>'Ecuador', 'ISO_2_letter'=>'EC', 'ISO_3_letter'=>'ECU', 'TLD'=>'.ec'),
            array('name_english'=>'Egypt', 'ISO_2_letter'=>'EG', 'ISO_3_letter'=>'EGY', 'TLD'=>'.eg'),
            array('name_english'=>'El Salvador', 'ISO_2_letter'=>'SV', 'ISO_3_letter'=>'SLV', 'TLD'=>'.sv'),
            array('name_english'=>'Equatorial Guinea', 'ISO_2_letter'=>'GQ', 'ISO_3_letter'=>'GNQ', 'TLD'=>'.gq'),
            array('name_english'=>'Eritrea', 'ISO_2_letter'=>'ER', 'ISO_3_letter'=>'ERI', 'TLD'=>'.er'),
            array('name_english'=>'Estonia', 'ISO_2_letter'=>'EE', 'ISO_3_letter'=>'EST', 'TLD'=>'.ee'),
            array('name_english'=>'Ethiopia', 'ISO_2_letter'=>'ET', 'ISO_3_letter'=>'ETH', 'TLD'=>'.et'),
            array('name_english'=>'Falkland Islands (Malvinas),', 'ISO_2_letter'=>'FK', 'ISO_3_letter'=>'FLK', 'TLD'=>'.fk'),
            array('name_english'=>'Faroe Islands', 'ISO_2_letter'=>'FO', 'ISO_3_letter'=>'FRO', 'TLD'=>'.fo'),
            array('name_english'=>'Fiji', 'ISO_2_letter'=>'FJ', 'ISO_3_letter'=>'FJI', 'TLD'=>'.fj'),
            array('name_english'=>'Finland', 'ISO_2_letter'=>'FI', 'ISO_3_letter'=>'FIN', 'TLD'=>'.fi'),
            array('name_english'=>'France', 'ISO_2_letter'=>'FR', 'ISO_3_letter'=>'FRA', 'TLD'=>'.fr'),
            array('name_english'=>'French Guiana', 'ISO_2_letter'=>'GF', 'ISO_3_letter'=>'GUF', 'TLD'=>'.gf'),
            array('name_english'=>'French Polynesia', 'ISO_2_letter'=>'PF', 'ISO_3_letter'=>'PYF', 'TLD'=>'.pf'),
            array('name_english'=>'French Southern Territories', 'ISO_2_letter'=>'TF', 'ISO_3_letter'=>'ATF', 'TLD'=>'.tf'),
            array('name_english'=>'Gabon', 'ISO_2_letter'=>'GA', 'ISO_3_letter'=>'GAB', 'TLD'=>'.ga'),
            array('name_english'=>'Gambia', 'ISO_2_letter'=>'GM', 'ISO_3_letter'=>'GMB', 'TLD'=>'.gm'),
            array('name_english'=>'Georgia', 'ISO_2_letter'=>'GE', 'ISO_3_letter'=>'GEO', 'TLD'=>'.ge'),
            array('name_english'=>'Germany', 'ISO_2_letter'=>'DE', 'ISO_3_letter'=>'DEU', 'TLD'=>'.de'),
            array('name_english'=>'Ghana', 'ISO_2_letter'=>'GH', 'ISO_3_letter'=>'GHA', 'TLD'=>'.gh'),
            array('name_english'=>'Gibraltar', 'ISO_2_letter'=>'GI', 'ISO_3_letter'=>'GIB', 'TLD'=>'.gi'),
            array('name_english'=>'Greece', 'ISO_2_letter'=>'GR', 'ISO_3_letter'=>'GRC', 'TLD'=>'.gr'),
            array('name_english'=>'Greenland', 'ISO_2_letter'=>'GL', 'ISO_3_letter'=>'GRL', 'TLD'=>'.gl'),
            array('name_english'=>'Grenada', 'ISO_2_letter'=>'GD', 'ISO_3_letter'=>'GRD', 'TLD'=>'.gd'),
            array('name_english'=>'Guadeloupe', 'ISO_2_letter'=>'GP', 'ISO_3_letter'=>'GLP', 'TLD'=>'.gp'),
            array('name_english'=>'Guam', 'ISO_2_letter'=>'GU', 'ISO_3_letter'=>'GUM', 'TLD'=>'.gu'),
            array('name_english'=>'Guatemala', 'ISO_2_letter'=>'GT', 'ISO_3_letter'=>'GTM', 'TLD'=>'.gt'),
            array('name_english'=>'Guernsey', 'ISO_2_letter'=>'GG', 'ISO_3_letter'=>'GGY', 'TLD'=>'.gg'),
            array('name_english'=>'Guinea', 'ISO_2_letter'=>'GN', 'ISO_3_letter'=>'GIN', 'TLD'=>'.gn'),
            array('name_english'=>'Guinea-Bissau', 'ISO_2_letter'=>'GW', 'ISO_3_letter'=>'GNB', 'TLD'=>'.gw'),
            array('name_english'=>'Guyana', 'ISO_2_letter'=>'GY', 'ISO_3_letter'=>'GUY', 'TLD'=>'.gy'),
            array('name_english'=>'Haiti', 'ISO_2_letter'=>'HT', 'ISO_3_letter'=>'HTI', 'TLD'=>'.ht'),
            array('name_english'=>'Heard Island and McDonald Islands', 'ISO_2_letter'=>'HM', 'ISO_3_letter'=>'HMD', 'TLD'=>'.hm'),
            array('name_english'=>'Holy See', 'ISO_2_letter'=>'VA', 'ISO_3_letter'=>'VAT', 'TLD'=>'.va'),
            array('name_english'=>'Honduras', 'ISO_2_letter'=>'HN', 'ISO_3_letter'=>'HND', 'TLD'=>'.hn'),
            array('name_english'=>'Hungary', 'ISO_2_letter'=>'HU', 'ISO_3_letter'=>'HUN', 'TLD'=>'.hu'),
            array('name_english'=>'Iceland', 'ISO_2_letter'=>'IS', 'ISO_3_letter'=>'ISL', 'TLD'=>'.is'),
            array('name_english'=>'India', 'ISO_2_letter'=>'IN', 'ISO_3_letter'=>'IND', 'TLD'=>'.in'),
            array('name_english'=>'Indonesia', 'ISO_2_letter'=>'ID', 'ISO_3_letter'=>'IDN', 'TLD'=>'.id'),
            array('name_english'=>'Iran (Islamic Republic of),', 'ISO_2_letter'=>'IR', 'ISO_3_letter'=>'IRN', 'TLD'=>'.ir'),
            array('name_english'=>'Iraq', 'ISO_2_letter'=>'IQ', 'ISO_3_letter'=>'IRQ', 'TLD'=>'.iq'),
            array('name_english'=>'Ireland', 'ISO_2_letter'=>'IE', 'ISO_3_letter'=>'IRL', 'TLD'=>'.ie'),
            array('name_english'=>'Isle of Man', 'ISO_2_letter'=>'IM', 'ISO_3_letter'=>'IMN', 'TLD'=>'.im'),
            array('name_english'=>'Israel', 'ISO_2_letter'=>'IL', 'ISO_3_letter'=>'ISR', 'TLD'=>'.il'),
            array('name_english'=>'Italy', 'ISO_2_letter'=>'IT', 'ISO_3_letter'=>'ITA', 'TLD'=>'.it'),
            array('name_english'=>'Jamaica', 'ISO_2_letter'=>'JM', 'ISO_3_letter'=>'JAM', 'TLD'=>'.jm'),
            array('name_english'=>'Japan', 'ISO_2_letter'=>'JP', 'ISO_3_letter'=>'JPN', 'TLD'=>'.jp'),
            array('name_english'=>'Jersey', 'ISO_2_letter'=>'JE', 'ISO_3_letter'=>'JEY', 'TLD'=>'.je'),
            array('name_english'=>'Jordan', 'ISO_2_letter'=>'JO', 'ISO_3_letter'=>'JOR', 'TLD'=>'.jo'),
            array('name_english'=>'Kazakhstan', 'ISO_2_letter'=>'KZ', 'ISO_3_letter'=>'KAZ', 'TLD'=>'.kz'),
            array('name_english'=>'Kenya', 'ISO_2_letter'=>'KE', 'ISO_3_letter'=>'KEN', 'TLD'=>'.ke'),
            array('name_english'=>'Kiribati', 'ISO_2_letter'=>'KI', 'ISO_3_letter'=>'KIR', 'TLD'=>'.ki'),
            array('name_english'=>'Kuwait', 'ISO_2_letter'=>'KW', 'ISO_3_letter'=>'KWT', 'TLD'=>'.kw'),
            array('name_english'=>'Kyrgyzstan', 'ISO_2_letter'=>'KG', 'ISO_3_letter'=>'KGZ', 'TLD'=>'.kg'),
            array('name_english'=>'Lao People\'s Democratic Republic', 'ISO_2_letter'=>'LA', 'ISO_3_letter'=>'LAO', 'TLD'=>'.la'),
            array('name_english'=>'Latvia', 'ISO_2_letter'=>'LV', 'ISO_3_letter'=>'LVA', 'TLD'=>'.lv'),
            array('name_english'=>'Lebanon', 'ISO_2_letter'=>'LB', 'ISO_3_letter'=>'LBN', 'TLD'=>'.lb'),
            array('name_english'=>'Lesotho', 'ISO_2_letter'=>'LS', 'ISO_3_letter'=>'LSO', 'TLD'=>'.ls'),
            array('name_english'=>'Liberia', 'ISO_2_letter'=>'LR', 'ISO_3_letter'=>'LBR', 'TLD'=>'.lr'),
            array('name_english'=>'Libya', 'ISO_2_letter'=>'LY', 'ISO_3_letter'=>'LBY', 'TLD'=>'.ly'),
            array('name_english'=>'Liechtenstein', 'ISO_2_letter'=>'LI', 'ISO_3_letter'=>'LIE', 'TLD'=>'.li'),
            array('name_english'=>'Lithuania', 'ISO_2_letter'=>'LT', 'ISO_3_letter'=>'LTU', 'TLD'=>'.lt'),
            array('name_english'=>'Luxembourg', 'ISO_2_letter'=>'LU', 'ISO_3_letter'=>'LUX', 'TLD'=>'.lu'),
            array('name_english'=>'Madagascar', 'ISO_2_letter'=>'MG', 'ISO_3_letter'=>'MDG', 'TLD'=>'.mg'),
            array('name_english'=>'Malawi', 'ISO_2_letter'=>'MW', 'ISO_3_letter'=>'MWI', 'TLD'=>'.mw'),
            array('name_english'=>'Malaysia', 'ISO_2_letter'=>'MY', 'ISO_3_letter'=>'MYS', 'TLD'=>'.my'),
            array('name_english'=>'Maldives', 'ISO_2_letter'=>'MV', 'ISO_3_letter'=>'MDV', 'TLD'=>'.mv'),
            array('name_english'=>'Mali', 'ISO_2_letter'=>'ML', 'ISO_3_letter'=>'MLI', 'TLD'=>'.ml'),
            array('name_english'=>'Malta', 'ISO_2_letter'=>'MT', 'ISO_3_letter'=>'MLT', 'TLD'=>'.mt'),
            array('name_english'=>'Marshall Islands', 'ISO_2_letter'=>'MH', 'ISO_3_letter'=>'MHL', 'TLD'=>'.mh'),
            array('name_english'=>'Martinique', 'ISO_2_letter'=>'MQ', 'ISO_3_letter'=>'MTQ', 'TLD'=>'.mq'),
            array('name_english'=>'Mauritania', 'ISO_2_letter'=>'MR', 'ISO_3_letter'=>'MRT', 'TLD'=>'.mr'),
            array('name_english'=>'Mauritius', 'ISO_2_letter'=>'MU', 'ISO_3_letter'=>'MUS', 'TLD'=>'.mu'),
            array('name_english'=>'Mayotte', 'ISO_2_letter'=>'YT', 'ISO_3_letter'=>'MYT', 'TLD'=>'.yt'),
            array('name_english'=>'Mexico', 'ISO_2_letter'=>'MX', 'ISO_3_letter'=>'MEX', 'TLD'=>'.mx'),
            array('name_english'=>'Micronesia (Federated States of),', 'ISO_2_letter'=>'FM', 'ISO_3_letter'=>'FSM', 'TLD'=>'.fm'),
            array('name_english'=>'Monaco', 'ISO_2_letter'=>'MC', 'ISO_3_letter'=>'MCO', 'TLD'=>'.mc'),
            array('name_english'=>'Mongolia', 'ISO_2_letter'=>'MN', 'ISO_3_letter'=>'MNG', 'TLD'=>'.mn'),
            array('name_english'=>'Montenegro', 'ISO_2_letter'=>'ME', 'ISO_3_letter'=>'MNE', 'TLD'=>'.me'),
            array('name_english'=>'Montserrat', 'ISO_2_letter'=>'MS', 'ISO_3_letter'=>'MSR', 'TLD'=>'.ms'),
            array('name_english'=>'Morocco', 'ISO_2_letter'=>'MA', 'ISO_3_letter'=>'MAR', 'TLD'=>'.ma'),
            array('name_english'=>'Mozambique', 'ISO_2_letter'=>'MZ', 'ISO_3_letter'=>'MOZ', 'TLD'=>'.mz'),
            array('name_english'=>'Myanmar', 'ISO_2_letter'=>'MM', 'ISO_3_letter'=>'MMR', 'TLD'=>'.mm'),
            array('name_english'=>'Namibia', 'ISO_2_letter'=>'NA', 'ISO_3_letter'=>'NAM', 'TLD'=>'.na'),
            array('name_english'=>'Nauru', 'ISO_2_letter'=>'NR', 'ISO_3_letter'=>'NRU', 'TLD'=>'.nr'),
            array('name_english'=>'Nepal', 'ISO_2_letter'=>'NP', 'ISO_3_letter'=>'NPL', 'TLD'=>'.np'),
            array('name_english'=>'Netherlands', 'ISO_2_letter'=>'NL', 'ISO_3_letter'=>'NLD', 'TLD'=>'.nl'),
            array('name_english'=>'New Caledonia', 'ISO_2_letter'=>'NC', 'ISO_3_letter'=>'NCL', 'TLD'=>'.nc'),
            array('name_english'=>'New Zealand', 'ISO_2_letter'=>'NZ', 'ISO_3_letter'=>'NZL', 'TLD'=>'.nz'),
            array('name_english'=>'Nicaragua', 'ISO_2_letter'=>'NI', 'ISO_3_letter'=>'NIC', 'TLD'=>'.ni'),
            array('name_english'=>'Niger', 'ISO_2_letter'=>'NE', 'ISO_3_letter'=>'NER', 'TLD'=>'.ne'),
            array('name_english'=>'Nigeria', 'ISO_2_letter'=>'NG', 'ISO_3_letter'=>'NGA', 'TLD'=>'.ng'),
            array('name_english'=>'Niue', 'ISO_2_letter'=>'NU', 'ISO_3_letter'=>'NIU', 'TLD'=>'.nu'),
            array('name_english'=>'Norfolk Island', 'ISO_2_letter'=>'NF', 'ISO_3_letter'=>'NFK', 'TLD'=>'.nf'),
            array('name_english'=>'Northern Mariana Islands', 'ISO_2_letter'=>'MP', 'ISO_3_letter'=>'MNP', 'TLD'=>'.mp'),
            array('name_english'=>'Norway', 'ISO_2_letter'=>'NO', 'ISO_3_letter'=>'NOR', 'TLD'=>'.no'),
            array('name_english'=>'Oman', 'ISO_2_letter'=>'OM', 'ISO_3_letter'=>'OMN', 'TLD'=>'.om'),
            array('name_english'=>'Pakistan', 'ISO_2_letter'=>'PK', 'ISO_3_letter'=>'PAK', 'TLD'=>'.pk'),
            array('name_english'=>'Palau', 'ISO_2_letter'=>'PW', 'ISO_3_letter'=>'PLW', 'TLD'=>'.pw'),
            array('name_english'=>'Panama', 'ISO_2_letter'=>'PA', 'ISO_3_letter'=>'PAN', 'TLD'=>'.pa'),
            array('name_english'=>'Papua New Guinea', 'ISO_2_letter'=>'PG', 'ISO_3_letter'=>'PNG', 'TLD'=>'.pg'),
            array('name_english'=>'Paraguay', 'ISO_2_letter'=>'PY', 'ISO_3_letter'=>'PRY', 'TLD'=>'.py'),
            array('name_english'=>'Peru', 'ISO_2_letter'=>'PE', 'ISO_3_letter'=>'PER', 'TLD'=>'.pe'),
            array('name_english'=>'Philippines', 'ISO_2_letter'=>'PH', 'ISO_3_letter'=>'PHL', 'TLD'=>'.ph'),
            array('name_english'=>'Pitcairn', 'ISO_2_letter'=>'PN', 'ISO_3_letter'=>'PCN', 'TLD'=>'.pn'),
            array('name_english'=>'Poland', 'ISO_2_letter'=>'PL', 'ISO_3_letter'=>'POL', 'TLD'=>'.pl'),
            array('name_english'=>'Portugal', 'ISO_2_letter'=>'PT', 'ISO_3_letter'=>'PRT', 'TLD'=>'.pt'),
            array('name_english'=>'Puerto Rico', 'ISO_2_letter'=>'PR', 'ISO_3_letter'=>'PRI', 'TLD'=>'.pr'),
            array('name_english'=>'Qatar', 'ISO_2_letter'=>'QA', 'ISO_3_letter'=>'QAT', 'TLD'=>'.qa'),
            array('name_english'=>'Republic of Korea', 'ISO_2_letter'=>'KR', 'ISO_3_letter'=>'KOR', 'TLD'=>'.kr'),
            array('name_english'=>'Republic of Moldova', 'ISO_2_letter'=>'MD', 'ISO_3_letter'=>'MDA', 'TLD'=>'.md'),
            array('name_english'=>'Romania', 'ISO_2_letter'=>'RO', 'ISO_3_letter'=>'ROU', 'TLD'=>'.ro'),
            array('name_english'=>'Russian Federation', 'ISO_2_letter'=>'RU', 'ISO_3_letter'=>'RUS', 'TLD'=>'.ru'),
            array('name_english'=>'Rwanda', 'ISO_2_letter'=>'RW', 'ISO_3_letter'=>'RWA', 'TLD'=>'.rw'),
            array('name_english'=>'Réunion', 'ISO_2_letter'=>'RE', 'ISO_3_letter'=>'REU', 'TLD'=>'.re'),
            array('name_english'=>'Saint Barthélemy', 'ISO_2_letter'=>'BL', 'ISO_3_letter'=>'BLM', 'TLD'=>'.gp'),
            array('name_english'=>'Saint Helena', 'ISO_2_letter'=>'SH', 'ISO_3_letter'=>'SHN', 'TLD'=>'.sh'),
            array('name_english'=>'Saint Kitts and Nevis', 'ISO_2_letter'=>'KN', 'ISO_3_letter'=>'KNA', 'TLD'=>'.kn'),
            array('name_english'=>'Saint Lucia', 'ISO_2_letter'=>'LC', 'ISO_3_letter'=>'LCA', 'TLD'=>'.lc'),
            array('name_english'=>'Saint Martin (French Part),', 'ISO_2_letter'=>'MF', 'ISO_3_letter'=>'MAF', 'TLD'=>'.gp'),
            array('name_english'=>'Saint Pierre and Miquelon', 'ISO_2_letter'=>'PM', 'ISO_3_letter'=>'SPM', 'TLD'=>'.pm'),
            array('name_english'=>'Saint Vincent and the Grenadines', 'ISO_2_letter'=>'VC', 'ISO_3_letter'=>'VCT', 'TLD'=>'.vc'),
            array('name_english'=>'Samoa', 'ISO_2_letter'=>'WS', 'ISO_3_letter'=>'WSM', 'TLD'=>'.ws'),
            array('name_english'=>'San Marino', 'ISO_2_letter'=>'SM', 'ISO_3_letter'=>'SMR', 'TLD'=>'.sm'),
            array('name_english'=>'Sao Tome and Principe', 'ISO_2_letter'=>'ST', 'ISO_3_letter'=>'STP', 'TLD'=>'.st'),
            array('name_english'=>'Sark', 'ISO_2_letter'=>'', 'ISO_3_letter'=>'', 'TLD'=>''),
            array('name_english'=>'Saudi Arabia', 'ISO_2_letter'=>'SA', 'ISO_3_letter'=>'SAU', 'TLD'=>'.sa'),
            array('name_english'=>'Senegal', 'ISO_2_letter'=>'SN', 'ISO_3_letter'=>'SEN', 'TLD'=>'.sn'),
            array('name_english'=>'Serbia', 'ISO_2_letter'=>'RS', 'ISO_3_letter'=>'SRB', 'TLD'=>'.rs'),
            array('name_english'=>'Seychelles', 'ISO_2_letter'=>'SC', 'ISO_3_letter'=>'SYC', 'TLD'=>'.sc'),
            array('name_english'=>'Sierra Leone', 'ISO_2_letter'=>'SL', 'ISO_3_letter'=>'SLE', 'TLD'=>'.sl'),
            array('name_english'=>'Singapore', 'ISO_2_letter'=>'SG', 'ISO_3_letter'=>'SGP', 'TLD'=>'.sg'),
            array('name_english'=>'Sint Maarten (Dutch part),', 'ISO_2_letter'=>'SX', 'ISO_3_letter'=>'SXM', 'TLD'=>'.sx'),
            array('name_english'=>'Slovakia', 'ISO_2_letter'=>'SK', 'ISO_3_letter'=>'SVK', 'TLD'=>'.sk'),
            array('name_english'=>'Slovenia', 'ISO_2_letter'=>'SI', 'ISO_3_letter'=>'SVN', 'TLD'=>'.si'),
            array('name_english'=>'Solomon Islands', 'ISO_2_letter'=>'SB', 'ISO_3_letter'=>'SLB', 'TLD'=>'.sb'),
            array('name_english'=>'Somalia', 'ISO_2_letter'=>'SO', 'ISO_3_letter'=>'SOM', 'TLD'=>'.so'),
            array('name_english'=>'South Africa', 'ISO_2_letter'=>'ZA', 'ISO_3_letter'=>'ZAF', 'TLD'=>'.za'),
            array('name_english'=>'South Georgia and the South Sandwich Islands', 'ISO_2_letter'=>'GS', 'ISO_3_letter'=>'SGS', 'TLD'=>'.gs'),
            array('name_english'=>'South Sudan', 'ISO_2_letter'=>'SS', 'ISO_3_letter'=>'SSD', 'TLD'=>''),
            array('name_english'=>'Spain', 'ISO_2_letter'=>'ES', 'ISO_3_letter'=>'ESP', 'TLD'=>'.es'),
            array('name_english'=>'Sri Lanka', 'ISO_2_letter'=>'LK', 'ISO_3_letter'=>'LKA', 'TLD'=>'.lk'),
            array('name_english'=>'State of Palestine', 'ISO_2_letter'=>'PS', 'ISO_3_letter'=>'PSE', 'TLD'=>'.ps'),
            array('name_english'=>'Sudan', 'ISO_2_letter'=>'SD', 'ISO_3_letter'=>'SDN', 'TLD'=>'.sd'),
            array('name_english'=>'Suriname', 'ISO_2_letter'=>'SR', 'ISO_3_letter'=>'SUR', 'TLD'=>'.sr'),
            array('name_english'=>'Svalbard and Jan Mayen Islands', 'ISO_2_letter'=>'SJ', 'ISO_3_letter'=>'SJM', 'TLD'=>'.sj'),
            array('name_english'=>'Swaziland', 'ISO_2_letter'=>'SZ', 'ISO_3_letter'=>'SWZ', 'TLD'=>'.sz'),
            array('name_english'=>'Sweden', 'ISO_2_letter'=>'SE', 'ISO_3_letter'=>'SWE', 'TLD'=>'.se'),
            array('name_english'=>'Switzerland', 'ISO_2_letter'=>'CH', 'ISO_3_letter'=>'CHE', 'TLD'=>'.ch'),
            array('name_english'=>'Syrian Arab Republic', 'ISO_2_letter'=>'SY', 'ISO_3_letter'=>'SYR', 'TLD'=>'.sy'),
            array('name_english'=>'Tajikistan', 'ISO_2_letter'=>'TJ', 'ISO_3_letter'=>'TJK', 'TLD'=>'.tj'),
            array('name_english'=>'Thailand', 'ISO_2_letter'=>'TH', 'ISO_3_letter'=>'THA', 'TLD'=>'.th'),
            array('name_english'=>'The former Yugoslav Republic of Macedonia', 'ISO_2_letter'=>'MK', 'ISO_3_letter'=>'MKD', 'TLD'=>'.mk'),
            array('name_english'=>'Timor-Leste', 'ISO_2_letter'=>'TL', 'ISO_3_letter'=>'TLS', 'TLD'=>'.tl'),
            array('name_english'=>'Togo', 'ISO_2_letter'=>'TG', 'ISO_3_letter'=>'TGO', 'TLD'=>'.tg'),
            array('name_english'=>'Tokelau', 'ISO_2_letter'=>'TK', 'ISO_3_letter'=>'TKL', 'TLD'=>'.tk'),
            array('name_english'=>'Tonga', 'ISO_2_letter'=>'TO', 'ISO_3_letter'=>'TON', 'TLD'=>'.to'),
            array('name_english'=>'Trinidad and Tobago', 'ISO_2_letter'=>'TT', 'ISO_3_letter'=>'TTO', 'TLD'=>'.tt'),
            array('name_english'=>'Tunisia', 'ISO_2_letter'=>'TN', 'ISO_3_letter'=>'TUN', 'TLD'=>'.tn'),
            array('name_english'=>'Turkey', 'ISO_2_letter'=>'TR', 'ISO_3_letter'=>'TUR', 'TLD'=>'.tr'),
            array('name_english'=>'Turkmenistan', 'ISO_2_letter'=>'TM', 'ISO_3_letter'=>'TKM', 'TLD'=>'.tm'),
            array('name_english'=>'Turks and Caicos Islands', 'ISO_2_letter'=>'TC', 'ISO_3_letter'=>'TCA', 'TLD'=>'.tc'),
            array('name_english'=>'Tuvalu', 'ISO_2_letter'=>'TV', 'ISO_3_letter'=>'TUV', 'TLD'=>'.tv'),
            array('name_english'=>'Uganda', 'ISO_2_letter'=>'UG', 'ISO_3_letter'=>'UGA', 'TLD'=>'.ug'),
            array('name_english'=>'Ukraine', 'ISO_2_letter'=>'UA', 'ISO_3_letter'=>'UKR', 'TLD'=>'.ua'),
            array('name_english'=>'United Arab Emirates', 'ISO_2_letter'=>'AE', 'ISO_3_letter'=>'ARE', 'TLD'=>'.ae'),
            array('name_english'=>'United Kingdom of Great Britain and Northern Ireland', 'ISO_2_letter'=>'GB', 'ISO_3_letter'=>'GBR', 'TLD'=>'.uk'),
            array('name_english'=>'United Republic of Tanzania', 'ISO_2_letter'=>'TZ', 'ISO_3_letter'=>'TZA', 'TLD'=>'.tz'),
            array('name_english'=>'United States Minor Outlying Islands', 'ISO_2_letter'=>'UM', 'ISO_3_letter'=>'UMI', 'TLD'=>'.um'),
            array('name_english'=>'United States Virgin Islands', 'ISO_2_letter'=>'VI', 'ISO_3_letter'=>'VIR', 'TLD'=>'.vi'),
            array('name_english'=>'United States of America', 'ISO_2_letter'=>'US', 'ISO_3_letter'=>'USA', 'TLD'=>'.us'),
            array('name_english'=>'Uruguay', 'ISO_2_letter'=>'UY', 'ISO_3_letter'=>'URY', 'TLD'=>'.uy'),
            array('name_english'=>'Uzbekistan', 'ISO_2_letter'=>'UZ', 'ISO_3_letter'=>'UZB', 'TLD'=>'.uz'),
            array('name_english'=>'Vanuatu', 'ISO_2_letter'=>'VU', 'ISO_3_letter'=>'VUT', 'TLD'=>'.vu'),
            array('name_english'=>'Venezuela (Bolivarian Republic of),', 'ISO_2_letter'=>'VE', 'ISO_3_letter'=>'VEN', 'TLD'=>'.ve'),
            array('name_english'=>'Viet Nam', 'ISO_2_letter'=>'VN', 'ISO_3_letter'=>'VNM', 'TLD'=>'.vn'),
            array('name_english'=>'Wallis and Futuna Islands', 'ISO_2_letter'=>'WF', 'ISO_3_letter'=>'WLF', 'TLD'=>'.wf'),
            array('name_english'=>'Western Sahara', 'ISO_2_letter'=>'EH', 'ISO_3_letter'=>'ESH', 'TLD'=>'.eh'),
            array('name_english'=>'Yemen', 'ISO_2_letter'=>'YE', 'ISO_3_letter'=>'YEM', 'TLD'=>'.ye'),
            array('name_english'=>'Zambia', 'ISO_2_letter'=>'ZM', 'ISO_3_letter'=>'ZMB', 'TLD'=>'.zm'),
            array('name_english'=>'Zimbabwe', 'ISO_2_letter'=>'ZW', 'ISO_3_letter'=>'ZWE', 'TLD'=>'.zw')
        );

        foreach($countriesAndCodes as $countryAndCode){
            App\Country::create($countryAndCode);
        }
	}
}
