# AdvancedAchievements Web Interface
Create new achievements for your minecraft server on your browser, faster and easier.


# Installation
1. Download the project from this repository
2. Upload files to your favorite web hosting or use it on your localhost
3. Select an achievement type
4. Fill out the necessary information
5. Lookup for the output data inside **/builder/content**

# File Strucure
- The core of this project is located on the builder and **/builder/cases**, feel free to review the code, it's commented (Spanish) for easy read.
- You'll find the output of every achievement type in **builder/content**, please do not remove any file from here to prevent issues while crerating new achievements.
- Forms of every achievement are located in **/new-achievement** folder, their assets are located in **/css** and **/scripts**

# Upcoming features
1. English translation


# Advanced Achievements Web Interface
Create new achievements for your minecraft server on your browser, faster and easier. Available in Spanish and English.

# Installation
- Download the latest stable version of this project
- Upload your files to your favorite web hosting

# Configuration
In order to change the default language, you'll have to edit includes/settings.php
```php
// Available languages: es_mx (Español) and en_us (English).
$systemLanguage = "es_mx";
```

You can also modify the websites title
```php
$systemWebTitle = "My Cool Title";
```

Change the default limitations for rewards and objectives to match your needs.
How does this work? My server has an strict economy system, so i decided to create limitations of how much money a single achievements can reward on completion.
You can easily change these limitations here.

Limits: Desired integrer number for limits
LimitsLength: Integrer count of Limits number selected

For example, if you choose your RewardsLimits to "1000000). You'll have to set your LimitsLengthRewards to (7), because "1000000" has SEVEN numbers.
```php
$systemLimitsObjectives             = "1000";
$systemLimitsLengthObjectives       = "4";
$systemLimitsRewards                = "10000";
$systemLimitsLengthRewards          = "5";
```

# Translations
You can modify the default translations (both available in English and Spanish) to match your needs. Simply locate the includes/lang_xx.php files and modify them as you wish
```php
$langMainTitle = "DO NOT MODIFY THE VARIABLE NAMES, ONLY TEXT";
```
