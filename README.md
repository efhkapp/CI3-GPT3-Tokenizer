# GPT-3-Encoder-Decoder-PHP
# Codeigniter 3 enable, by EFHK
# Source GIT: https://github.com/CodeRevolutionPlugins/GPT-3-Encoder-PHP
PHP BPE Text Encoder/Decoder for GPT-2 / GPT-3 // in Codeigniter 3

## About
The modfications:
1. Put gpt3-encoder.php code into gpt3_helper.php
2. Remapped the json files in gpt3_helper.php, all json files are stored in vendor/gpt3/
3. The bottom code in gpt3-encoder.php are placed in a controller Gpt.php. Endpoint for testing: %host%/gpt
4. Added a line in controller Gpt.php to print the number of token out.

## Usage
1. Please note below from Source GIT:
The mbstring PHP extension is needed for this tool to work correctly (in case non-ASCII characters are present in the tokenized text): [details here on how to install mbstring](https://www.php.net/manual/en/mbstring.installation.php)

2. Download Codeigniter 3

3. Copy the files in this GIT to the folder:
application/controllers/Gpt.php
applictaion/helpers/gpt3_helper.php
vendor/gpt3/*




