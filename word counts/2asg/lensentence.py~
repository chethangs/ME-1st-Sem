numlines = 0
numchars = 0
numwords = 0
with open("/home/a/devops/2asg/message.txt",'r') as file:
    for line in file:
        word_list = line.split()
        numlines+=1
        numwords+=len(word_list)
        numchars+=len(line)
        print(line,numchars,numlines,numwords)


import subprocess
with open("outputsa.txt", "w+") as output:
    subprocess.call(["python", "./.py"], stdout=output);

