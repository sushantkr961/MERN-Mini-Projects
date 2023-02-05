# Monthly Calender
- Demo Link :  https://verdant-concha-94cbfe.netlify.app/

## Problem Statement:-

- Build a Calender App where you can add all your Meetings tasks.
- Your application has a Navbar that contains 2 tabs (this is already in the template no need to build it).
  1. Home(index.html)
  2. Calender(calender.html)

### Home Page (index.html):-

- This page contains a form with 3 input boxes and one select tag and a textarea having the following fields (this is already in the template no need to build).

1. Name (Input-Type-text)
2. Description (Textarea)
3. Month (Select)
4. Week (Select)
5. MeetType (Select)

- On clicking on form submit (form submit event) you should store todo data in your local storage with key `meets`.

- Refer to this image for better understanding:- ![form.png](https://masai-course.s3.ap-south-1.amazonaws.com/editor/uploads/2023-01-18/Screenshot%202023-01-18%20at%205.12.07%20PM_216301.png)

- Refer to this doc to understand how to work with textarea - [Link](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/textarea).

### Calender Page (calender.html):-

- On this page all the data from the `meets` will be shown in a board.
- In your html file there is a div with a class `calender`.
- Inside that div we have 4 divs with the following ids:-

  1. Week-1
  2. Week-2
  3. Week-3
  4. Week-4

- There will also be a select tag with id:- `month`. By default the value of the select tag will be `January`.

- Now Show the Meets in form of small cards based on the select tag value. So by default show only those cards that has month as `January`.

- Now append them to the div whick matches with it's week value. So inside div with id `Week-1` append the cards which has week value as `Week-1`.

![image](https://masai-course.s3.ap-south-1.amazonaws.com/editor/uploads/2023-01-18/Screenshot%202023-01-18%20at%205.14.51%20PM_731513.png)

- When Someone changes the month select tags value then the new selected months should show up. Like if the new selected value is `February` then show only those cards that has month value as `February`.

![image](https://masai-course.s3.ap-south-1.amazonaws.com/editor/uploads/2023-01-18/Screenshot%202023-01-18%20at%205.15.48%20PM_393423.png)

- If the user changes the select tag value of any card, the localStorage and DOM should be updated.

![image](https://masai-course.s3.ap-south-1.amazonaws.com/editor/uploads/2023-01-18/Screenshot%202023-01-18%20at%205.16.09%20PM_659231.png)

- Use flex in the div with class `calender` to create this layout. Also when the screensize is less than or equal to 900px the flex-direction should change to column.

### Optional Feature :-

- Each todo card also has a button with the text `Delete`. Clicking on the button that perticular card should be deleted both from DOM and from localStoarge.
