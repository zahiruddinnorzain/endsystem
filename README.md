## step 1
```
composer require Zahiruddinnorzain\Endsystem
```

## step 2
put this in middleware

```
use DateTime;
use Zahiruddinnorzain\Endsystem\EndSystemServiceProvider;
```
```
$hari = 29;
$bulan = 3;
$tahun = 2024;
$name = "admin";
$contact = "+601111236789";
$email = "email@emailme.com";
$status_pay = false;

$today = new DateTime(); 
$givenDate = new DateTime("$tahun-$bulan-$hari");
// Compare the dates
if ( ($today > $givenDate) && ($status_pay == false) ) {
    $endsistem = new EndSystemServiceProvider;
    return $endsistem->show($hari,$bulan,$tahun,$contact,$email,$name);
}else{
    return $next($request);
}
```