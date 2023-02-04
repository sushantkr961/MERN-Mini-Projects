import data from "../../submissionData.json"; // do not create this file
import "cypress-localstorage-commands";
// let data = [{ submission_link: "http://localhost:8080/", id: 67890 }];

const Data = [
  {
    name: "S",
    desc: "D",
    month: "January",
    week: "Week-1",
    meetType: "Zoom",
  },
  {
    name: "S1",
    desc: "D1",
    month: "January",
    week: "Week-3",
    meetType: "Zoom",
  },
  {
    name: "S3",
    desc: "D3",
    month: "January",
    week: "Week-3",
    meetType: "Zoom",
  },
  {
    name: "S4",
    desc: "D4",
    month: "February",
    week: "Week-1",
    meetType: "Zoom",
  },
  {
    name: "S5",
    desc: "D5",
    month: "February",
    week: "Week-1",
    meetType: "Zoom",
  },
  {
    name: "S6",
    desc: "D6",
    month: "February",
    week: "Week-2",
    meetType: "Zoom",
  },
];
data.map(({ submission_link: url, id }) => {
  describe("Test", function () {
    let acc_score = 1;
    function FormSubmit(data, score, LSLen) {
      cy.get("#name").clear().type(data.name);
      cy.get("#desc").clear().type(data.desc);
      cy.get("#month").select(data.month);
      cy.get("#week").select(data.week);
      cy.get("#meetType").select(data.meetType);
      cy.get("form")
        .submit()
        .should(() => {
          expect(JSON.parse(localStorage.getItem("meets")).length).to.equal(
            LSLen
          );
        })
        .then(() => {
          acc_score += score;
        });
    }
    function CheckBoard(data, score, index, id) {
      cy.get(`#${id}>div`).eq(index).contains(data.name);
      cy.get(`#${id}>div`).eq(index).contains(data.desc);
      cy.get(`#${id}>div`).eq(index).contains(data.meetType);

      cy.then(() => {
        acc_score += score;
      });
    }
    if (url.charAt(url.length - 1) != "/") {
      url = url + "/";
    }
    if (url && url.length) {
      beforeEach(() => {
        cy.restoreLocalStorage();
      });
      afterEach(() => {
        cy.saveLocalStorage();
      });
      it("Form Submit Storing Data is LS", () => {
        cy.visit(url);
        expect(localStorage.getItem("todos")).to.eq(null);
        FormSubmit(Data[0], 2, 1);
      }); // Score:- 2
      it("Check the LS Data after mutiple form submits", () => {
        for (let i = 1; i < Data.length; i++) {
          FormSubmit(Data[i], 0, i + 1);
        }
        cy.then(() => {
          acc_score += 2;
        });
      }); // Score:- 2
      it("By Default only the January Cards are showing in appropriate Week Column", () => {
        cy.visit(`${url}calender.html`);

        CheckBoard(Data[0], 0, 0, Data[0].week);
        CheckBoard(Data[1], 0, 0, Data[1].week);
        CheckBoard(Data[2], 0, 1, Data[2].week);

        cy.then(() => {
          acc_score += 3;
        });
      }); // Score:- 3
      it(`Check the flex value and the responsiveness of the calender Columns`, () => {
        cy.get(".calender").should("have.css", "display", "flex");
        cy.viewport(800, 800);
        cy.get(".calender").should("have.css", "flex-direction", "column");
        cy.then(() => {
          acc_score += 2;
        });
      }); // Score:- 2
      it("Check the board after changing the week", () => {
        cy.get("#Week-1>div").eq(0).children("select").select("Week-2");
        CheckBoard(Data[0], 0, 0, "Week-2");
        cy.get("#Week-1").children().should("have.length", 0);

        cy.then(() => {
          acc_score += 3;
        });
      }); // Score:-3

      it(`Change the month and check the board`, () => {
        cy.get("#month").select("February");
        CheckBoard(Data[3], 0, 0, Data[3].week);
        CheckBoard(Data[4], 0, 1, Data[4].week);
        CheckBoard(Data[5], 0, 0, Data[5].week);
        cy.then(() => {
          acc_score += 3;
        });
      }); //3

      it(`Chage the week again after month changing`, () => {
        cy.get("#Week-1>div").eq(0).children("select").select("Week-3");
        CheckBoard(Data[4], 0, 0, Data[4].week);
        CheckBoard(Data[5], 0, 0, Data[5].week);
        CheckBoard(Data[3], 0, 0, "Week-3");
        cy.then(() => {
          acc_score += 4;
        });
      }); //4
    }

    it(`generate score`, () => {
      //////////////
      console.log(acc_score);
      let result = {
        id,
        marks: Math.floor(acc_score),
      };
      result = JSON.stringify(result);
      cy.writeFile("results.json", `\n${result},`, { flag: "a+" }, (err) => {
        if (err) {
          console.error(err);
        }
      });
      //////////////////
    });
  });
});
