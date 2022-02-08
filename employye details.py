class A:
    def __init__(self, a,b):
        self.a = a
        self.b=b
    def __mul__(self, o):
            return "\n\n\nEmp id:"+o.a+"\nemp name is: "+self.a+"\nTotal salary:"+str(self.b*o.b)

ob1 = A(input("Enter Name of employee "),int(input("Enter daily salary ")))
ob2 = A(input("Enter employee Id "),int(input("Enter Number of working days")))
print(ob1 * ob2)


