<?php
/**
 * CountryCode
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Accounting API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * OpenAPI spec version: 2.0.7
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\Accounting;
use \XeroAPI\XeroPHP\AccountingObjectSerializer;

/**
 * CountryCode Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CountryCode
{
    /**
     * Possible values of this enum
     */
    const AD = 'AD';
    const AE = 'AE';
    const AF = 'AF';
    const AG = 'AG';
    const AI = 'AI';
    const AL = 'AL';
    const AM = 'AM';
    const AN = 'AN';
    const AO = 'AO';
    const AQ = 'AQ';
    const AR = 'AR';
    const _AS = 'AS';
    const AT = 'AT';
    const AU = 'AU';
    const AW = 'AW';
    const AZ = 'AZ';
    const BA = 'BA';
    const BB = 'BB';
    const BD = 'BD';
    const BE = 'BE';
    const BF = 'BF';
    const BG = 'BG';
    const BH = 'BH';
    const BI = 'BI';
    const BJ = 'BJ';
    const BL = 'BL';
    const BM = 'BM';
    const BN = 'BN';
    const BO = 'BO';
    const BR = 'BR';
    const BS = 'BS';
    const BT = 'BT';
    const BW = 'BW';
    const BY = 'BY';
    const BZ = 'BZ';
    const CA = 'CA';
    const CC = 'CC';
    const CD = 'CD';
    const CF = 'CF';
    const CG = 'CG';
    const CH = 'CH';
    const CI = 'CI';
    const CK = 'CK';
    const CL = 'CL';
    const CM = 'CM';
    const CN = 'CN';
    const CO = 'CO';
    const CR = 'CR';
    const CU = 'CU';
    const CV = 'CV';
    const CW = 'CW';
    const CX = 'CX';
    const CY = 'CY';
    const CZ = 'CZ';
    const DE = 'DE';
    const DJ = 'DJ';
    const DK = 'DK';
    const DM = 'DM';
    const _DO = 'DO';
    const DZ = 'DZ';
    const EC = 'EC';
    const EE = 'EE';
    const EG = 'EG';
    const EH = 'EH';
    const ER = 'ER';
    const ES = 'ES';
    const ET = 'ET';
    const FI = 'FI';
    const FJ = 'FJ';
    const FK = 'FK';
    const FM = 'FM';
    const FO = 'FO';
    const FR = 'FR';
    const GA = 'GA';
    const GB = 'GB';
    const GD = 'GD';
    const GE = 'GE';
    const GG = 'GG';
    const GH = 'GH';
    const GI = 'GI';
    const GL = 'GL';
    const GM = 'GM';
    const GN = 'GN';
    const GQ = 'GQ';
    const GR = 'GR';
    const GT = 'GT';
    const GU = 'GU';
    const GW = 'GW';
    const GY = 'GY';
    const HK = 'HK';
    const HN = 'HN';
    const HR = 'HR';
    const HT = 'HT';
    const HU = 'HU';
    const ID = 'ID';
    const IE = 'IE';
    const IL = 'IL';
    const IM = 'IM';
    const IN = 'IN';
    const IO = 'IO';
    const IQ = 'IQ';
    const IR = 'IR';
    const IS = 'IS';
    const IT = 'IT';
    const JE = 'JE';
    const JM = 'JM';
    const JO = 'JO';
    const JP = 'JP';
    const KE = 'KE';
    const KG = 'KG';
    const KH = 'KH';
    const KI = 'KI';
    const KM = 'KM';
    const KN = 'KN';
    const KP = 'KP';
    const KR = 'KR';
    const KW = 'KW';
    const KY = 'KY';
    const KZ = 'KZ';
    const LA = 'LA';
    const LB = 'LB';
    const LC = 'LC';
    const LI = 'LI';
    const LK = 'LK';
    const LR = 'LR';
    const LS = 'LS';
    const LT = 'LT';
    const LU = 'LU';
    const LV = 'LV';
    const LY = 'LY';
    const MA = 'MA';
    const MC = 'MC';
    const MD = 'MD';
    const ME = 'ME';
    const MF = 'MF';
    const MG = 'MG';
    const MH = 'MH';
    const MK = 'MK';
    const ML = 'ML';
    const MM = 'MM';
    const MN = 'MN';
    const MO = 'MO';
    const MP = 'MP';
    const MR = 'MR';
    const MS = 'MS';
    const MT = 'MT';
    const MU = 'MU';
    const MV = 'MV';
    const MW = 'MW';
    const MX = 'MX';
    const MY = 'MY';
    const MZ = 'MZ';
    const NA = 'NA';
    const NC = 'NC';
    const NE = 'NE';
    const NG = 'NG';
    const NI = 'NI';
    const NL = 'NL';
    const NO = 'NO';
    const NP = 'NP';
    const NR = 'NR';
    const NU = 'NU';
    const NZ = 'NZ';
    const OM = 'OM';
    const PA = 'PA';
    const PE = 'PE';
    const PF = 'PF';
    const PG = 'PG';
    const PH = 'PH';
    const PK = 'PK';
    const PL = 'PL';
    const PM = 'PM';
    const PN = 'PN';
    const PR = 'PR';
    const PS = 'PS';
    const PT = 'PT';
    const PW = 'PW';
    const PY = 'PY';
    const QA = 'QA';
    const RE = 'RE';
    const RO = 'RO';
    const RS = 'RS';
    const RU = 'RU';
    const RW = 'RW';
    const SA = 'SA';
    const SB = 'SB';
    const SC = 'SC';
    const SD = 'SD';
    const SE = 'SE';
    const SG = 'SG';
    const SH = 'SH';
    const SI = 'SI';
    const SJ = 'SJ';
    const SK = 'SK';
    const SL = 'SL';
    const SM = 'SM';
    const SN = 'SN';
    const SO = 'SO';
    const SR = 'SR';
    const SS = 'SS';
    const ST = 'ST';
    const SV = 'SV';
    const SX = 'SX';
    const SY = 'SY';
    const SZ = 'SZ';
    const TC = 'TC';
    const TD = 'TD';
    const TG = 'TG';
    const TH = 'TH';
    const TJ = 'TJ';
    const TK = 'TK';
    const TL = 'TL';
    const TM = 'TM';
    const TN = 'TN';
    const TO = 'TO';
    const TR = 'TR';
    const TT = 'TT';
    const TV = 'TV';
    const TW = 'TW';
    const TZ = 'TZ';
    const UA = 'UA';
    const UG = 'UG';
    const US = 'US';
    const UY = 'UY';
    const UZ = 'UZ';
    const VA = 'VA';
    const VC = 'VC';
    const VE = 'VE';
    const VG = 'VG';
    const VI = 'VI';
    const VN = 'VN';
    const VU = 'VU';
    const WF = 'WF';
    const WS = 'WS';
    const XK = 'XK';
    const YE = 'YE';
    const YT = 'YT';
    const ZA = 'ZA';
    const ZM = 'ZM';
    const ZW = 'ZW';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AD,
            self::AE,
            self::AF,
            self::AG,
            self::AI,
            self::AL,
            self::AM,
            self::AN,
            self::AO,
            self::AQ,
            self::AR,
            self::_AS,
            self::AT,
            self::AU,
            self::AW,
            self::AZ,
            self::BA,
            self::BB,
            self::BD,
            self::BE,
            self::BF,
            self::BG,
            self::BH,
            self::BI,
            self::BJ,
            self::BL,
            self::BM,
            self::BN,
            self::BO,
            self::BR,
            self::BS,
            self::BT,
            self::BW,
            self::BY,
            self::BZ,
            self::CA,
            self::CC,
            self::CD,
            self::CF,
            self::CG,
            self::CH,
            self::CI,
            self::CK,
            self::CL,
            self::CM,
            self::CN,
            self::CO,
            self::CR,
            self::CU,
            self::CV,
            self::CW,
            self::CX,
            self::CY,
            self::CZ,
            self::DE,
            self::DJ,
            self::DK,
            self::DM,
            self::_DO,
            self::DZ,
            self::EC,
            self::EE,
            self::EG,
            self::EH,
            self::ER,
            self::ES,
            self::ET,
            self::FI,
            self::FJ,
            self::FK,
            self::FM,
            self::FO,
            self::FR,
            self::GA,
            self::GB,
            self::GD,
            self::GE,
            self::GG,
            self::GH,
            self::GI,
            self::GL,
            self::GM,
            self::GN,
            self::GQ,
            self::GR,
            self::GT,
            self::GU,
            self::GW,
            self::GY,
            self::HK,
            self::HN,
            self::HR,
            self::HT,
            self::HU,
            self::ID,
            self::IE,
            self::IL,
            self::IM,
            self::IN,
            self::IO,
            self::IQ,
            self::IR,
            self::IS,
            self::IT,
            self::JE,
            self::JM,
            self::JO,
            self::JP,
            self::KE,
            self::KG,
            self::KH,
            self::KI,
            self::KM,
            self::KN,
            self::KP,
            self::KR,
            self::KW,
            self::KY,
            self::KZ,
            self::LA,
            self::LB,
            self::LC,
            self::LI,
            self::LK,
            self::LR,
            self::LS,
            self::LT,
            self::LU,
            self::LV,
            self::LY,
            self::MA,
            self::MC,
            self::MD,
            self::ME,
            self::MF,
            self::MG,
            self::MH,
            self::MK,
            self::ML,
            self::MM,
            self::MN,
            self::MO,
            self::MP,
            self::MR,
            self::MS,
            self::MT,
            self::MU,
            self::MV,
            self::MW,
            self::MX,
            self::MY,
            self::MZ,
            self::NA,
            self::NC,
            self::NE,
            self::NG,
            self::NI,
            self::NL,
            self::NO,
            self::NP,
            self::NR,
            self::NU,
            self::NZ,
            self::OM,
            self::PA,
            self::PE,
            self::PF,
            self::PG,
            self::PH,
            self::PK,
            self::PL,
            self::PM,
            self::PN,
            self::PR,
            self::PS,
            self::PT,
            self::PW,
            self::PY,
            self::QA,
            self::RE,
            self::RO,
            self::RS,
            self::RU,
            self::RW,
            self::SA,
            self::SB,
            self::SC,
            self::SD,
            self::SE,
            self::SG,
            self::SH,
            self::SI,
            self::SJ,
            self::SK,
            self::SL,
            self::SM,
            self::SN,
            self::SO,
            self::SR,
            self::SS,
            self::ST,
            self::SV,
            self::SX,
            self::SY,
            self::SZ,
            self::TC,
            self::TD,
            self::TG,
            self::TH,
            self::TJ,
            self::TK,
            self::TL,
            self::TM,
            self::TN,
            self::TO,
            self::TR,
            self::TT,
            self::TV,
            self::TW,
            self::TZ,
            self::UA,
            self::UG,
            self::US,
            self::UY,
            self::UZ,
            self::VA,
            self::VC,
            self::VE,
            self::VG,
            self::VI,
            self::VN,
            self::VU,
            self::WF,
            self::WS,
            self::XK,
            self::YE,
            self::YT,
            self::ZA,
            self::ZM,
            self::ZW,
        ];
    }
}


