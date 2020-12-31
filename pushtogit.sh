!/bin/bash
# lines that start like this are shell comments
# read projects current directory with $PWD
echo “running command from” $PWD
cd $PWD
git add .
git commit -m "auto-commit"
git push