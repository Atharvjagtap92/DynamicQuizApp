package automation;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;

public class QuizTest {

    public static void main(String[] args) throws InterruptedException {

        WebDriver driver = new ChromeDriver();

        driver.get("http://localhost/DynamicQuizApp/index.php");
        Thread.sleep(2000);

        System.out.println("Title: " + driver.getTitle());
        System.out.println("URL: " + driver.getCurrentUrl());

        // Start Quiz
        driver.findElement(By.tagName("button")).click();

        // Answer questions
        for (int i = 0; i < 3; i++) {
            Thread.sleep(1000);
            driver.findElements(By.name("option")).get(0).click();
            driver.findElement(By.tagName("button")).click();
        }

        driver.quit();
    }
}
