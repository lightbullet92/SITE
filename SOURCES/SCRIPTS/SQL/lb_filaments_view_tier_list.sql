select
`lb_filaments_tier_list`.`id` AS `ID`,
`lb_filaments_printer_types`.`type` AS `Printer type`,
`lb_filaments_tiers`.`tier` AS `Tier`,
`lb_filaments_manufacturers`.`manufacturer` AS `Manufacturer`,
`lb_filaments_types`.`type` AS `Filament type`,
`lb_filaments_type_mods`.`mod` AS `Filament mod`,
`lb_filaments_colors`.`color` AS `Color`,
`lb_filaments_tier_list`.`description` AS `Description`
from 
`lb_filaments_tier_list`
left join `lb_filaments_printer_types` ON `lb_filaments_tier_list`.`printer_type_id` = `lb_filaments_printer_types`.`id`
left join `lb_filaments_tiers` ON `lb_filaments_tier_list`.`tiers_id` = `lb_filaments_tiers`.`id`
left join `lb_filaments_manufacturers` ON `lb_filaments_tier_list`.`manufacturer_id` = `lb_filaments_manufacturers`.`id`
left join `lb_filaments_types` ON `lb_filaments_tier_list`.`type_id` = `lb_filaments_types`.`id`
left join `lb_filaments_type_mods` ON `lb_filaments_tier_list`.`type_mod_id` = `lb_filaments_type_mods`.`id`
left join `lb_filaments_colors` ON `lb_filaments_tier_list`.`color_id` = `lb_filaments_colors`.`id`
order by
2,
CASE `lb_filaments_tiers`.`tier`
    WHEN 'S' THEN 1
    WHEN 'A' THEN 2
    WHEN 'B' THEN 3
    WHEN 'C' THEN 4
    WHEN 'F' THEN 5
    ELSE 6
END,
4
;