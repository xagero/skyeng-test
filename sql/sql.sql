Select
  teacher.name as teacher_name,
  group_concat(student.name order by student.name ASC separator ', ') as student_all
From `teacher`
Left join teacher_student on teacher.id = teacher_student.teacher_id
Left join student on teacher_student.student_id = student.id
Group By teacher.name
Order by teacher.name ASC
Limit 0, 1000;

Select
	teacher1.name as Name1,
    t1.teacher_id as id1,
    teacher2.name as Name2,
    t2.teacher_id as id2,
    count(*) as count_student,
    group_concat(student.name order by student.name ASC separator ', ') as student_all
From teacher_student t1
Inner join teacher_student t2 ON t1.student_id = t2.student_id and t1.teacher_id < t2.teacher_id
Inner join teacher as teacher1 ON teacher1.id = t1.teacher_id
Inner join teacher as teacher2 ON teacher2.id = t2.teacher_id
Left join student ON student.id = t1.student_id
Group by t1.teacher_id, t2.teacher_id
Order by count_student desc;
