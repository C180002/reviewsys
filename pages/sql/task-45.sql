SELECT 
  rv.`id`, 
  rv.`restaurant`, 
  rs.`name`, 
  rv.`comment`, 
  rv.`reviewer`, 
  rv.`rating`, 
  rv.`created` 
FROM 
      reviews AS rv 
  LEFT OUTER JOIN 
      restaurants AS rs 
    ON 
        rv.restaurant = rs.id 
WHERE 
  rs.id = 7 
;