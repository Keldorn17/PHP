-- SELECT IF(eredmeny >= 50, "Sikeres vizsga", "Sikertelen vizsga") as Eredmenyek, COUNT(jid) as Letszam FROM jelentkezesek GROUP BY Eredmenyek;

SELECT COUNT(jid) as Letszam, 'Sikeres vizsga' as Eredmenyek FROM jelentkezesek WHERE eredmeny >= 50
union all
SELECT COUNT(jid) as Letszam, 'Sikertelen vizsga' as Eredmenyek FROM jelentkezesek WHERE eredmeny < 50;