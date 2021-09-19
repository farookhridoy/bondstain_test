1. What is RDBMS? <br>
Answer: A Relation Database Management system (RDBMS) is a database management system that is based on the relational model. It has the following major components: Table, Record/Tuple/Row, Field, and Column/Attribute. <br>
2. A table (person) of columns (name, dob, city) . Find total number of person per city Where city name starts with a letter ‘D’ <br>
Answer: SELECT * FROM person WHERE city LIKE "D%"; <br>

3. Tables; person (person_id, person_name, person_dob, salary_per_annum) and person_address
(address_id, person_id, address_line, city) <br>
A. List the names of persons who lives in the city ‘Manhattan’ and salary is more than
40,000 per year. <br>
Anser: SELECT person.person_name FROM person INNER JOIN person_address on person.person_id=person_address.person_id WHERE person_address.city="Manhattan" AND person.salary_per_annum > 40000; <br>

