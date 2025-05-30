# Grocery Website Security Project

## Project Overview
This project focuses on building a grocery website using **HTML**, **PHP**, **JavaScript**, and **CSS**, hosted locally using **XAMPP**. During development, we identified and analyzed several security vulnerabilities, including **Path Traversal Attacks**, **Stored Cross-Site Scripting (XSS) Attacks**, and **SQL Injection**. Each team member contributed to investigating specific vulnerabilities and implementing mitigation strategies to enhance the website's security.
![image](https://github.com/user-attachments/assets/0e80743a-60e0-4e6c-9267-faaf52f6662e)


## Project Features
- A fully functional grocery website with front-end and back-end integration.
- User-friendly interface and database-driven functionalities.
- Security assessments of the website's vulnerabilities.

## Brandon Antoine Contributions
### Directory Traversal Attack
My contribution to this project focused on understanding, demonstrating, and mitigating **Directory Traversal Attacks**:
- **Research and Analysis**: Explored the nature and mechanisms of directory traversal attacks, which target files and directories outside the web root directory.![image](https://github.com/user-attachments/assets/5041abe6-027a-430e-93a2-dbf07b7f02e0)
![image](https://github.com/user-attachments/assets/c7b174d8-bbdd-4f9e-aaf5-12c03db661e0)

- **Attack Simulation**: Analyzed folder structures and utilized tools such as **Burp Suite Intruder** to uncover vulnerabilities effectively.![image](https://github.com/user-attachments/assets/1a5749ef-8ce0-4534-be69-8f1d31d0bbbc)

- **Mitigation Strategies**: Implemented robust solutions to prevent directory traversal attacks, such as:
  - Disabling directory browsing using `.htaccess` files.
  - Moving sensitive files outside the web root directory.
  - Restricting access to critical files using specific permissions.
    ![image](https://github.com/user-attachments/assets/6eb45e20-da1c-4006-8ef8-43eba01f9245)



## Salman Alqahtani Contributions

- **Stored XSS Attack**: Analysis and mitigation of vulnerabilities arising from malicious scripts stored in the database and executed on the affected page.

## Celeste Casillas Contributions
- **SQL Injection**: Investigation and implementation of secure coding practices, such as prepared statements, to prevent SQL injection attacks and safeguard the database.

## Key Learning Outcomes
This project offered valuable insights into common web vulnerabilities and their impact on the **Confidentiality, Integrity, and Availability (CIA)** triad. It also provided an opportunity to strengthen my skills in:
- Front-end and back-end web development.
- Security best practices for building resilient web applications.
- The use of tools like **Burp Suite** for vulnerability assessment.

## References
- Almutairi, A. A., Mishra, S., & AlShehri, M. (2022). *Web Security: Emerging Threats and Defense*. Computer Systems Science & Engineering, 40(3).
- OWASP Foundation. (n.d.). *Path Traversal*. Retrieved from [https://owasp.org/www-community/attacks/Path_Traversal](https://owasp.org/www-community/attacks/Path_Traversal)
- PortSwigger. (n.d.). *File path traversal*. Retrieved from [https://portswigger.net/web-security/file-path-traversal](https://portswigger.net/web-security/file-path-traversal)
- GeeksforGeeks. (n.d.). *How to prevent direct access to PHP files*. Retrieved from [https://www.geeksforgeeks.org/how-to-prevent-direct-access-to-php-files/](https://www.geeksforgeeks.org/how-to-prevent-direct-access-to-php-files/)

