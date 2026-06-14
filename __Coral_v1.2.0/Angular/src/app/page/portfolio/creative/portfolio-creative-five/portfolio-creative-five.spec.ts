import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PortfolioCreativeFive } from './portfolio-creative-five';

describe('PortfolioCreativeFive', () => {
  let component: PortfolioCreativeFive;
  let fixture: ComponentFixture<PortfolioCreativeFive>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [PortfolioCreativeFive]
    })
    .compileComponents();

    fixture = TestBed.createComponent(PortfolioCreativeFive);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
