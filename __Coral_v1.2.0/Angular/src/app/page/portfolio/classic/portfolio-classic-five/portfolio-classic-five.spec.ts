import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PortfolioClassicFive } from './portfolio-classic-five';

describe('PortfolioClassicFive', () => {
  let component: PortfolioClassicFive;
  let fixture: ComponentFixture<PortfolioClassicFive>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [PortfolioClassicFive]
    })
    .compileComponents();

    fixture = TestBed.createComponent(PortfolioClassicFive);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
