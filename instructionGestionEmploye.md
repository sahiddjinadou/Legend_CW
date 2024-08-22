1. **Interface `EmployeeOperations` :** Définit les opérations de base pour la gestion des employés.

2. **Classe Abstraite `Employee` :** Représente un employé avec des attributs de base. Elle aura une méthode abstraite qui sera définie en fonction du type d'employé à savoir un manager ou un développeur selon la classe appropriée.

3. **Classe `Manager` :** Hérite de `Employee` et ajoute des spécificités pour les managers. Un responsable est à la tête d'un nombre donné de personnes.

4. **Classe `Developer` :** Hérite de `Employee` et ajoute des spécificités pour les développeurs. Un développeur est spécialisé dans un langage en particulier.

5. **Classe `EmployeeManager` :** Gère les employés avec les fonctionnalités définies dans l'interface.

Vous devez créer les fichiers Java pour chaque classe (`Employee.java`, `Manager.java`, `Developer.java`, `EmployeeOperations.java`, `EmployeeManager.java`).