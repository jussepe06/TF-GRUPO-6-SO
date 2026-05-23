<?php
header('Content-Type: application/json');

$meminfo = file_get_contents('/proc/meminfo');
preg_match('/MemTotal:\s+(\d+)\s+kB/', $meminfo, $total);
preg_match('/MemAvailable:\s+(\d+)\s+kB/', $meminfo, $avail);

$totalMB = isset($total[1]) ? round($total[1] / 1024) : 0;
$availMB = isset($avail[1]) ? round($avail[1] / 1024) : 0;
$usedMB = $totalMB - $availMB;

$load = sys_getloadavg();
$cpu = isset($load[0]) ? $load[0] . " (Carga actual)" : "No disponible";

$procs = shell_exec('ps aux | wc -l');

echo json_encode([
    "cpu" => trim($cpu),
    "ram" => "$usedMB MB / $totalMB MB",
    "procesos" => trim($procs)
]);
?>
